<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lab;
use App\Models\Reply;
use App\Models\Sample;
use App\Traits\GeneralTrait;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LabController extends Controller
{
    use GeneralTrait;
    use ImageTrait;
    public function __construct()
    {
    }
    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (!$token = auth('lab')->attempt($credentials)) {
            return \response()->json($token);
        }
        $lab = auth('lab')->user();
        $lab->token = $token;
        return $this->returnData('Your Data', $lab, 'Successfully logged in');
    }
    public function register(Request $request)
    {
        try {
            $rules = [
                "email" => "required|string|unique:labs",
                "password" => "required|string",
                "country" => "required",
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                if ($request->image)
                    $lab_image = $this->saveImage($request->image, 'images/labs');
                else $lab_image = 0;
                $lab = Lab::create([
                    'center_id' => $request->center_id,
                    'image_path' => 'images/labs'.$lab_image,
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'phone' => $request->phone,
                    'website' => $request->website,
                    'address' => $request->address,
                    'country' => $request->country,
                ]);

                $lab->token = auth('lab')->login($lab);
                return $this->returnData('Your Data', $lab, 'Successfully register');
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
        auth('lab')->refresh();
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
    public function update(Request $request)
    {
        try {
            $rules = [
                "email" => "required|string|unique:labs",
                "password" => "required|string",
                "country" => "required",
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                if ($request->image)
                    $lab_image = $this->saveImage($request->image, 'images/labs');
                else $lab_image = 0;

                $lab_id = auth('lab')->user()->id;
                $lab = Lab::find($lab_id);
                $lab->update([
                    'center_id' => $request->center_id,
                    'image' => 'images/labs'.$lab_image,
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'phone' => $request->phone,
                    'website' => $request->website,
                    'address' => $request->address,
                    'country' => $request->country,
                ]);
                $lab->token = auth('lab')->refresh();
                return $this->returnData('Your Data', $lab, 'Successfully edited');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
    public function show($lab_id)
    {
        $data = Lab::find($lab_id);
        return $this->returnData('data', $data, 'Here Is Your Data');
    }
    public function addSample(Request $request)
    {
        Sample::create([
            'lab_id' => $request->lab_id,
            'doctor_id' => $request->doctor_id,
            'patient_id' => $request->patient_id,
            'reply_id' => $request->reply_id,
        ]);
        return $this->returnSuccessMessage('Successfully Added');
    }
    public function destroy()
    {
        try {
            Lab::destroy(auth('lab')->user()->id);
            return $this->returnSuccessMessage('Your account successfully deleted');
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $lab = Lab::find($id);
            if ($lab) {
                Lab::destroy($id);
                return $this->returnSuccessMessage('Lab successfully deleted');
            } else {
                return $this->returnError(404, "The requested lab does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function ourReply(Request $request)
    {
        $lab_image = $this->saveImage($request->result, 'images/replies');
        Reply::create([
            'sample_id' => $request->sample_id,
            'result' => $lab_image,
        ]);
        return $this->returnSuccessMessage('Successfully Added');
    }
}
