<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    use GeneralTrait;
    public function __construct()
    {
    }
    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (!$token = auth('admin')->attempt($credentials)) {
            return $this->returnError('401', 'Unauthorized');
        }


        return $this->returnData('token', $token, 'Here Is Your Token');
    }
    public function register(Request $request)
    {
        try {
            $rules = [
                "email" => "required|string|unique:admins",
                "password" => "required|string",
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                $admin = Admin::create([
                    'center_id' => $request->center_id,
                    'username' => $request->username,
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'permission' => $request->permission,
                ]);

                // $token = auth('admin')->user();
                $token = auth('admin')->login($admin);

                return $this->returnData('token', $token, 'Here Is Your Token');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
    public function myData()
    {
        $data = auth('admin')->user();
        return $this->returnData('data', $data, 'Here Is Your Data');
    }
    public function logout()
    {
        auth('admin')->logout();

        return $this->returnSuccessMessage('Successfully logged out');
    }
    public function refresh()
    {
        return $this->respondWithToken(auth('admin')->refresh());
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'expires_in' => auth('admin')->factory()->getTTL() * 60
        ]);
    }
}
