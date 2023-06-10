<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use App\Models\PharmacyProduct;
use App\Models\PharmacyProductImage;
use App\Traits\GeneralTrait;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PharmacyController extends Controller
{
    use GeneralTrait;
    use ImageTrait;
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
                if ($request->image)
                $pharmacy_image = $this->saveImage($request->image, 'images/pharmacies');
            else $pharmacy_image = 0;
                $pharmacy = Pharmacy::create([
                    'center_id' => $request->center_id,
                    'name' => $request->name,
                    'image_path'=>$pharmacy_image,
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

    public function edit(Request $request)
    {
        $pharmacy_id = auth('pharmacy')->user()->id;
        $pharmacy = Pharmacy::find($pharmacy_id);
        $pharmacy->update([
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
        return $this->returnSuccessMessage('Successfully Updated');

    }
    public function addProducts(Request $request)
    {
        PharmacyProduct::create([

            'pharmacy_id' => $request->pharmacy_id,
            'name' => $request->name,
            'description' => $request->description,
            'details' => $request->details,
            'price' => $request->price,
            'amount' => $request->amount,

        ]);

        return $this->returnSuccessMessage('Successfully added');
    }

    public function addProductImages(Request $request)
    {
        $pharmacyProductImage = $this->saveImage($request->image_path,'images/PharmacyProductImages');

        PharmacyProductImage::create([
            'pharmacy_product_id' => $request->pharmacy_product_id,
            'image_path' => $pharmacyProductImage,

        ]);

        return $this->returnSuccessMessage('Successfully added');
    }

}
