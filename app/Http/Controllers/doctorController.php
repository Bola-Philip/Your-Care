<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class doctorController extends Controller
{
    use GeneralTrait;
    public function __construct()
    {
        $this->middleware('auth:doctor', ['except' => ['login', 'register']]);
    }
    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (!$token = auth('doctor')->attempt($credentials)) {
            return $this->returnError('401', 'Unauthorized');
        }

        return $this->returnData('token', $token, 'Here Is Your Token');
    }
    public function register(Request $request)
    {
        $doctor = Doctor::create([
            'center_id' => $request->center_id,
            'department_id' => $request->department_id,
            'image' => $request->image,
            'username' => $request->username,
            'name' => $request->name,
            'ssn' => $request->ssn,
            'phone' => $request->phone,
            'work_phone' => $request->work_phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'work_email' => $request->work_email,
            'job_description' => $request->job_description,
            'abstract' => $request->abstract,
            'full_brief' => $request->full_brief,
            'job_id' => $request->job_id,
            'birth_date' => $request->birth_date,
            'experience_years' => $request->experience_years,
            'address' => $request->address,
            'salary' => $request->salary,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
        ]);

        $token = auth('doctor')->login($doctor);

        return $this->returnData('token', $token, 'Here Is Your Token');
    }
    public function myData()
    {
        $data = auth('doctor')->user();
        return $this->returnData('data', $data, 'Here Is Your Data');
    }
    public function logout()
    {
        auth('doctor')->logout();

        return $this->returnSuccessMessage('Successfully logged out');
    }
    public function refresh()
    {
        return $this->respondWithToken(auth('doctor')->refresh());
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('doctor')->factory()->getTTL() * 60
        ]);
    }
}
