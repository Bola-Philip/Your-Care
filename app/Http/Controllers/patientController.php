<?php

namespace App\Http\Controllers;

use App\Models\BookingRequest;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Report;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class patientController extends Controller
{
    use GeneralTrait;
    public function __construct()
    {
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
                $patient = Patient::create([
                    'center_id' => $request->center_id,
                    'insurance_company_id' => $request->insurance_company_id,
                    'image_path' => $request->image_path,
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
    public function myData()
    {
        $data = auth('patient')->user();
        return $this->returnData('data', $data, 'Here Is Your Data');
    }


    public function edit(Request $request)
    {
        $patient_id = auth('patient')->user()->id;
        $patient = Patient::find($patient_id);
        $patient->update([
            'center_id' => $request->center_id,
            'insurance_company_id' => $request->insurance_company_id,
            'image' => $request->image,
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
}
