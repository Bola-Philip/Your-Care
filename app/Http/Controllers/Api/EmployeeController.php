<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    use GeneralTrait;
    public function __construct()
    {
        $this->middleware('auth:nurse', ['except' => ['login', 'register']]);
    }
    public function register(Request $request)
    {
        $rules = [
            "email" => "required|string|unique:employees",
            "password" => "required|string",
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $code = $this->returnCodeAccordingToInput($validator);
            return $this->returnValidationError($code, $validator);
        } else {
            try {
                $nurse = Employee::create([
                    'center_id' => $request->center_id,
                    'department_id' => $request->department_id,
                    'image_path' => $request->image_path,
                    'username' => $request->username,
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'ssn' => $request->ssn,
                    'phone' => $request->phone,
                    'salary_per_hour' => $request->salary_per_hour,
                    'total_salary' => $request->total_salary,
                    'address' => $request->address,
                    'country' => $request->country,
                    'province' => $request->province,
                    'city' => $request->city,
                    'zip_code' => $request->zip_code,
                    'gender' => $request->gender,
                    'nationality' => $request->nationality,
                ]);

                $token = auth('nurse')->login($nurse);

                return $this->returnData('token', $token, 'Here Is Your Token');
            } catch (\Throwable $ex) {
                return $this->returnError($ex->getCode(), $ex->getMessage());
            }
        }
    }
    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (!$token = auth('nurse')->attempt($credentials)) {
            return $this->returnError('401', 'Unauthorized');
        }
        return $this->returnData('token', $token, 'Here Is Your Token');
    }
    public function myData()
    {
        $data = auth('nurse')->user();
        return $this->returnData('data', $data, 'Here Is Your Data');
    }
    public function logout()
    {
        auth('nurse')->logout();

        return $this->returnSuccessMessage('Successfully logged out');
    }
    public function refresh()
    {
        return $this->respondWithToken(auth('nurse')->refresh());
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'expires_in' => auth('nurse')->factory()->getTTL() * 60
        ]);
    }
}
