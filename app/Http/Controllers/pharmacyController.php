<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Pharmacy;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class pharmacyController extends Controller
{
    use GeneralTrait;
    public function __construct()
    {
    }
    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (!$token = auth('pharmacy')->attempt($credentials)) {
            return $this->returnError('401', 'Unauthorized');
        }

        return $this->returnData('token', $token, 'Here Is Your Token');
    }
    public function register(Request $request)
    {
        try {
            $rules = [
                "email" => "required|string|unique:pharmacies",
                "password" => "required|string",
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                $pharmacy = Pharmacy::create([
                    'center_id' => $request->center_id,
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'work_email' => $request->work_email,
                    'phone' => $request->phone,
                    'work_phone' => $request->work_phone,
                    'website' => $request->website,
                    'address' => $request->address,
                    'country' => $request->country,
                    'state' => $request->state,
                    'province' => $request->province,
                    'zipCod' => $request->zipCod,
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter,
                    'snapchat' => $request->snapchat,
                    'youtube' => $request->youtube,

                ]);

                $token = auth('pharmacy')->login($pharmacy);

                return $this->returnData('token', $token, 'Here Is Your Token');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
    public function myData()
    {
        $data = auth('pharmacy')->user();
        return $this->returnData('data', $data, 'Here Is Your Data');
    }
    public function logout()
    {
        auth('pharmacy')->logout();

        return $this->returnSuccessMessage('Successfully logged out');
    }
    public function refresh()
    {
        return $this->respondWithToken(auth('pharmacy')->refresh());
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,

            'expires_in' => auth('pharmacy')->factory()->getTTL() * 60
        ]);
    }
}
