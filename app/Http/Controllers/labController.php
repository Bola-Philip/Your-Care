<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Pharmacy;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class labController extends Controller
{
    use GeneralTrait;
    public function __construct()
    {
    }
    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (!$token = auth('lab')->attempt($credentials)) {
            return \response()->json($token);
        }

        return $this->returnData('token', $token, 'Here Is Your Token');
    }
    public function register(Request $request)
    {
        try {
            $rules = [
                "email" => "required|string|unique:labs",
                "password" => "required|string",
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                $lab = Lab::create([
                    'center_id' => $request->center_id,
                    'image_path' => $request->image_path,
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'phone' => $request->phone,
                    'website' => $request->website,
                    'address' => $request->address,

                ]);

                $token = auth('lab')->login($lab);

                return $this->returnData('token', $token, 'Here Is Your Token');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
    public function myData()
    {
        $data = auth('lab')->user();
        return $this->returnData('data', $data, 'Here Is Your Data');
    }
    public function refresh()
    {
        return $this->respondWithToken(auth('lab')->refresh());
    }
    public function logout()
    {
        auth('lab')->logout();

        return $this->returnSuccessMessage('Successfully logged out');
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'expires_in' => auth('lab')->factory()->getTTL() * 60
        ]);
    }
}
