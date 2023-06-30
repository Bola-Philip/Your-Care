<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ad;
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

    public function allLabs()
    {
        try {

            $labs = Lab::with(['rates', 'favorites'])->get();
            return $this->returnData('data', $labs);
        }catch (\Exception $ex){
            return $this->returnError($ex->getCode(),$ex->getMessage());
        }
    }

    public function login()
    {
        try {

            $credentials = request()->only('email', 'password');

            if (!$token = auth('lab')->attempt($credentials)) {
                return $this->returnError('401', 'Unauthorized');
            }
            $lab = auth('lab')->user();
            $lab->token = $token;
            return $this->returnData('Your Data', $lab, 'Successfully logged in');
        }catch (\Exception $ex){
            return $this->returnError($ex->getCode(),$ex->getMessage());
        }
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
                    'image_path' => 'images/labs' . $lab_image,
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
                    'image_path' => 'images/labs' . $lab_image,
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

    public function myData()
    {
        try {

            $data = auth('lab')->user();
            return $this->returnData('data', $data, 'Here Is Your Data');
        }catch (\Exception $ex){
            return $this->returnError($ex->getCode(),$ex->getMessage());
        }
    }
    public function refresh()
    {
        return $this->respondWithToken(auth('lab')->refresh());
    }
    public function logout()
    {
        try {

            if (auth('lab')->user()) {
                auth('lab')->logout();
                // auth('lab')->refresh();
                return $this->returnSuccessMessage('Successfully logged out');
            } else
                return $this->returnError('401', 'Unauthorized');
        }catch (\Exception $ex){
            return $this->returnError($ex->getCode(),$ex->getMessage());
        }
    }

    protected function respondWithToken($token)
    {
        try {

            return response()->json([
                'access_token' => $token,
                'expires_in' => auth('lab')->factory()->getTTL() * 60
            ]);
        }catch (\Exception $ex){
            return $this->returnError($ex->getCode(),$ex->getMessage());
        }
    }
    public function show($lab_id)
    {
        try {

            $data = Lab::find($lab_id);
            return $this->returnData('data', $data, 'Here Is Your Data');
        }catch (\Exception $ex){
            return $this->returnError($ex->getCode(),$ex->getMessage());
        }
    }
    public function addSample(Request $request)
    {
        try {
            $rules = [
                "lab_id" => "required|string|exists:labs,id",
                "doctor_id" => "required|string|exists:doctors,id",
                "patient_id" => "required|string|exists:patients,id",
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                $sample = Sample::create([
                    'lab_id' => $request->lab_id,
                    'doctor_id' => $request->doctor_id,
                    'patient_id' => $request->patient_id,
                ]);
                return $this->returnData('Sample', $sample, 'Sample successfully added');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function addReply($sample_id, Request $request)
    {
        try {
            if (Sample::find($sample_id)) {
                $lab_image = $this->saveImage($request->result, 'images/labs/replies');
                Reply::create([
                    'sample_id' => $sample_id,
                    'result' => 'images/labs/replies' . $lab_image,
                ]);
                return $this->returnSuccessMessage('Successfully Added');
            } else {
                return $this->returnError(404, "The requested sample does not exist !");
            }
        }catch (\Exception $ex){
            return $this->returnError($ex->getCode(),$ex->getMessage());
        }
    }
    public function ourReply()
    {
        try {

            $lab = Reply::with(['reply'])->find(auth('lab')->user()->id);
            return $this->returnData('Sample', $lab, 'These are your replies');
        }catch (\Exception $ex){
            return $this->returnError($ex->getCode(),$ex->getMessage());
        }
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
    public function addAds(Request $request)
    {
        try {

            $adImage = $this->saveImage($request->image, 'images/ads');

            $report = Ad::create([
                'doctor_id' => auth('doctor')->user()->id,
                'doctor_name' => $request->doctor_name,
                'specialty' => $request->specialty,
                'details' => $request->details,
                'image' => $adImage,

            ]);
            return $this->returnData("report", $report, 'Report has been successfully added.');
        }catch (\Exception $ex){
            return $this->returnError($ex->getCode(),$ex->getMessage());
        }
    }
}
