<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BookingRequest;
use App\Models\Patient;
use App\Models\PatientDisease;
use App\Models\PatientDiseaseMedia;
use App\Traits\GeneralTrait;
use App\Traits\ImageTrait;
use Dotenv\Store\File\Paths;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    use GeneralTrait;
    use ImageTrait;
    public function __construct()
    {
    }
    public function show($id)
    {
        try {
            $patient = Patient::find($id);
            if ($patient) {
                return $this->returnData('patient', $patient);
            } else {
                return $this->returnError(404, "The requested patient does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (!$token = auth('patient')->attempt($credentials)) {
            return $this->returnError('401', 'Unauthorized');
        }

        return $this->returnData('token', $token, 'Here Is Your Token');
    }
    public function register(Request $request)
    {
        $patient_image = $this->saveImage($request->image, 'images/patients');
        try {
            $rules = [
                "email" => "required|string|unique:patients",
                "password" => "required|string",
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                if ($request->image)
                    $patient_image = $this->saveImage($request->image, 'images/patients');
                else $patient_image = 0;
                $patient = Patient::create([
                    'center_id' => $request->center_id,
                    'insurance_company_id' => $request->insurance_company_id,
                    'image_path' => $patient_image,
                    'name' => $request->name,
                    'username' => $request->username,
                    'birth_date' => $request->birth_date,
                    'ssn' => $request->ssn,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'address' => $request->address,
                    'length' => $request->length,
                    'weight' => $request->weight,
                    'bloodType' => $request->bloodType,
                    'gender' => $request->gender,
                    'nationality' => $request->nationality,
                ]);

                $token = auth('patient')->login($patient);

                return $this->returnData('token', $token, 'Here Is Your Token');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function edit(Request $request)
    {
        $patient_image = $this->saveImage($request->image, 'images/patients');


        $patient_id = auth('patient')->user()->id;
        $patient = Patient::find($patient_id);
        $patient->update([
            'center_id' => $request->center_id,
            'insurance_company_id' => $request->insurance_company_id,
            'image' => $patient_image,
            'name' => $request->name,
            'username' => $request->username,
            'birth_date' => $request->birth_date,
            'ssn' => $request->ssn,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'length' => $request->length,
            'weight' => $request->weight,
            'bloodType' => $request->bloodType,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
        ]);

        return $this->returnSuccessMessage('Successfully Updated');
    }

    public function addDisease(Request $request)
    {
        try {
            $patient_id = auth('patient')->user()->id;
            $patient = Patient::find($patient_id);
            if ($patient) {
                $disease = PatientDisease::create([
                    'patient_id' => $patient_id,
                    'disease_title' => $request->title,
                    'disease_description' => $request->description
                ]);
                if ($request->media)
                    $media_file = $this->saveImage($request->media, 'images/patients/DiseaseMedia');
                else $media_file = 0;
                $disease_media = PatientDiseaseMedia::create([
                    'disease_id' => $patient_id,
                    'media_path' => $media_file,
                    'detection_date' => $request->detection_at,
                ]);

                return $this->returnData('disease', [$disease, $disease_media], 'Disease successfully added');
            } else {
                return $this->returnError(404, "The requested patient does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function addDiseaseMedia($id, Request $request)
    {
        try {
            $disease = PatientDisease::find($id);
            if ($disease) {
                if ($request->media)
                    $media_file = $this->saveImage($request->media, 'images/patients/DiseaseMedia');
                else $media_file = 0;
                $disease_media = PatientDiseaseMedia::create([
                    'media_path' => $media_file,
                    'detection_date' => $request->detection_at,
                ]);

                return $this->returnData('disease', $disease_media, 'Media successfully added');
            } else {
                return $this->returnError(404, "The requested disease does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function myData()
    {
        $data = auth('patient')->user();
        return $this->returnData('data', $data, 'Here Is Your Data');
    }

    public function bookingRequest(Request $request, $doctor_id)
    {
        BookingRequest::create([
            'center_id' => auth('patient')->user()->center_id,
            'patient_id' => auth('patient')->user()->id,
            'doctor_id' => $doctor_id,
            'title' => $request->title,
            'service_description' => $request->service_description,
            'rating' => $request->rating,
        ]);
        return $this->returnSuccessMessage('You Made a Request Successfully');
    }

    public function myReport()
    {
        $patient_id = auth('patient')->user()->id;
        $reports = DB::table('reports')->where('patient_id', $patient_id)->get();
        return response()->json($reports);
    }
    public function refresh()
    {
        return $this->respondWithToken(auth('patient')->refresh());
    }
    public function logout()
    {
        auth('patient')->logout();

        return $this->returnSuccessMessage('Successfully logged out');
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'expires_in' => auth('patient')->factory()->getTTL() * 60
        ]);
    }

    public function destroy()
    {
        Patient::destroy(auth('patient')->user()->id);
        return $this->returnSuccessMessage('Your account successfully deleted');
    }

    public function delete($id)
    {
        try {
            $patient = Patient::find($id);
            if ($patient) {
                Patient::destroy($id);
                return $this->returnSuccessMessage('Patient successfully deleted');
            } else {
                return $this->returnError(404, "The requested patient does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
}
