<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    use GeneralTrait;
    public function __construct()
    {
    }

    public function show($id)
    {
        try {
            $admin = Admin::find($id);
            if ($admin) {
                return $this->returnData('Admin', $admin);
            } else {
                return $this->returnError(404, "The requested admin does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
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
                // $token = auth('admin')->login($admin);

                return $this->returnData('Admin', $admin, 'Admin successfully added');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
            $admin = Admin::find($id);
            if ($admin) {
                $rules = [
                    "email" => "required|string|unique:admins",
                    "password" => "required|string",
                ];
                $validator = Validator::make($request->all(), $rules);

                if ($validator->fails()) {
                    $code = $this->returnCodeAccordingToInput($validator);
                    return $this->returnValidationError($code, $validator);
                } else {
                    $admin->update([
                        'username' => $request->username,
                        'name' => $request->name,
                        'phone' => $request->phone,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'permission' => $request->permission,
                    ]);

                    // $token = auth('admin')->user();
                    // $token = auth('admin')->login($admin);

                    return $this->returnData('Admin', $admin, 'Admin successfully edited');
                }
            } else {
                return $this->returnError(404, "The requested admin does not exist !");
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

    public function delete($id)
    {
        try {
            $admin = Admin::find($id);
            if ($admin) {
                Admin::destroy($id);
                return $this->returnSuccessMessage('Admin successfully deleted');
            } else {
                return $this->returnError(404, "The requested admin does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());

    protected function authorization()
    {
        $admin_id = auth('admin')->user()->id;
        $admin = Admin::find($admin_id);

        if (Gate::allows('manger-permission')) {
            return 'You are manger';
        } elseif (Gate::allows('supervisor-permission')) {
            return 'You are supervisor';
        } elseif (Gate::allows('parser-permission')) {
            return 'You are parser';
        } else {
            return 'You dont have any of the specified permissions';
        }

        if(Gate::allows('manger-permission') || Gate::allows('supervisor-permission')){
            return 'You are manger';

        }else {
            return 'You dont have any of the specified permissions';
        }
    }
}
