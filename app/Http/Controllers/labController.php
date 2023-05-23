<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Pharmacy;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class labController extends Controller
{
    use GeneralTrait;
    public function __construct()
    {
    }
    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (! $token = auth('lab')->attempt($credentials)) {
            return \response()->json($token);
        }

        return $this->returnData('token',$token,'Here Is Your Token');
    }
    public function register(Request $request)
    {
        $lab = Lab::create([

            'center_id' => $request->center_id,
            'image' => $request->image,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'website' => $request->website,
            'address' => $request->address,

        ]);

        $token = auth('lab')->login($lab);

        return $this->returnData('token',$token,'Here Is Your Token');
    }
    public function myData()
    {
        $data = auth('lab')->user();
        return $this->returnData('data',$data,'Here Is Your Data');
    }
    public function logout()
    {
        auth('lab')->logout();

        return $this->returnSuccessMessage('Successfully logged out');
    }
    public function refresh()
    {
        return $this->respondWithToken(auth('lab')->refresh());
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('lab')->factory()->getTTL() * 60
        ]);
    }
}
