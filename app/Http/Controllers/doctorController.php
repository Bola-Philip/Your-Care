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
        $this->middleware('auth:doctor', ['except' => ['login','register']]);
    }
    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (! $token = auth('doctor')->attempt($credentials)) {
            return $this->returnError('401','Unauthorized');
        }

        return $this->returnData('token',$token,'Here Is Your Token');
    }
    public function register(Request $request)
    {
        $doctor = Doctor::create([
            'centerId' => $request->centerId,
            'departmentId' => $request->departmentId,
            'image' => $request->image,
            'userName' => $request->userName,
            'name' => $request->name,
            'sSN' => $request->sSN,
            'jobDescription' => $request->jobDescription,
            'abstract' => $request->abstract,
            'fullBrief' => $request->fullBrief,
            'jobId' => $request->jobId,
            'birthDate' => $request->birthDate,
            'experianceYears' => $request->experianceYears,
            'phone' => $request->phone,
            'phoneWorkId' => $request->phoneWorkId,
            'email' => $request->email->email,
            'password' => Hash::make($request->password),
            'emailWorkId' => $request->emailWorkId,
            'address' => $request->address,
            'salary' => $request->salary,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
        ]);

        $token = auth('doctor')->login($doctor);

        return $this->returnData('token',$token,'Here Is Your Token');
    }
    public function myData()
    {
        $data = auth('doctor')->user();
        return $this->returnData('data',$data,'Here Is Your Data');
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
