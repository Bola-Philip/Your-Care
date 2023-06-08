<?php

namespace App\Http\Controllers\Api;

use App\Traits\GeneralTrait;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Center;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CenterController extends Controller
{
    use GeneralTrait;

    public function store(Request $request)
    {
        try {
            $rules = [
                "name" => "required|string",
                "username" => "required|string",
                "subscription_type" => "required|string",
                "subscription_period" => "required|string",
                "email" => "required|string|unique:centers",
                "password" => "required"
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                $center = Center::create([
                    'logo_path' => $request->logo_path,
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'country' => $request->country,
                    'subscription_type' => $request->subscription_type,
                    'subscription_period' => $request->subscription_period,
                    'formal_email' => $request->formal_email,
                    'phone' => $request->phone,
                    'formal_phone' => $request->formal_phone,
                    'website' => $request->website,
                    'address1' => $request->address1,
                    'address2' => $request->address2,
                    'state' => $request->state,
                    'province' => $request->province,
                    'zip_code' => $request->zip_code,
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter,
                    'snapchat' => $request->snapchat,
                    'youtube' => $request->youtube,
                ]);
                Admin::create([
                    'center_id' => $center->id,
                    'name' => $center->name,
                    'username' => $center->username,
                    'password' => $center->password,
                    'phone' => $center->phone,
                    'email' => $center->email,
                    'permission' => 'admin',
                ]);
                //login

                $credentials = request()->only('email', 'password');

                if (!$token = auth('admin')->attempt($credentials)) {
                    return $this->returnError('401', 'Unauthorized');
                }

                return $this->returnData('token', $token, 'Here Is Your Token');

                //     $token = auth('admin')->login($admin);

                //     return $this->returnData('token',$token,'Here Is Your Token');
                // $token = auth('admin')->attempt($credentials);  //generate token
                // if (!$token)
                //         return $this->returnError('E001', 'بيانات الدخول غير صحيحة');

                //     $user = auth('admin')->user();
                //     $user ->api_token = $token;
                //     //return token
                //     return $this->returnData('user', $user);  //return json response
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

        // return response()->json(['message' => 'Center created successfully', 'center' => $center], 200);

    }

    public function show(string $id)
    {
        try {
            $center = Center::find($id);
            if ($center) {
                return $this->returnData('center', $center);
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $center = Center::findOrFail($id);
            $admin = $center->admins()->where('permission', 'admin');
            $admins = Admin::where('center_id', '=', $id)->get();
            $rules = [
                "name" => "required|string",
                "username" => "required|string",
                "subscription_type" => "required|string",
                "subscription_period" => "required|string",

            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                $center->update([
                    'logo_path' => $request->logo_path,
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'country' => $request->country,
                    'subscription_type' => $request->subscription_type,
                    'subscription_period' => $request->subscription_period,
                    'formal_email' => $request->formal_email,
                    'phone' => $request->phone,
                    'formal_phone' => $request->formal_phone,
                    'website' => $request->website,
                    'address1' => $request->address1,
                    'address2' => $request->address2,
                    'state' => $request->state,
                    'province' => $request->province,
                    'zip_code' => $request->zip_code,
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter,
                    'snapchat' => $request->snapchat,
                    'youtube' => $request->youtube,
                ]);

                $admin->update([
                    'name' => $center->name,
                    'username' => $center->username,
                    'password' => $center->password,
                    'phone' => $center->phone,
                    'email' => $center->email,
                ]);

                //    return dd($admins);
                return $this->returnData('center', $center);
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $center = Center::find($id);
            if ($center) {
                Center::destroy($id);
                return $this->returnSuccessMessage('Center Successfully deleted');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function createDepartment(Request $request)
    {
        try {
            $department = Department::create([
                'center_id' => 1,
                'name' => $request->name,
                'image_path' => $request->image_path,
                'description' => $request->description,
            ]);
            return $this->returnData('department', $department);
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
}
