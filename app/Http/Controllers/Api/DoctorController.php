<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\PatientTakeService;
use App\Models\Report;
use App\Traits\GeneralTrait;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    use GeneralTrait;
    use ImageTrait;
    public function __construct()
    {
        $this->middleware('auth:doctor', ['except' => ['login', 'register']]);
    }
    public function register(Request $request)
    {
        $rules = [
            "email" => "required|string|unique:doctors",
            "password" => "required|string",

        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $code = $this->returnCodeAccordingToInput($validator);
            return $this->returnValidationError($code, $validator);
        } else {
            try {
                if ($request->image)
                    $doctor_image = $this->saveImage($request->image, 'images/doctors');
                else $doctor_image = 0;
                $doctor = Doctor::create([
                    'center_id' => $request->center_id,
                    'department_id' => $request->department_id,
                    'image_path' => $doctor_image,
                    'username' => $request->username,
                    'name' => $request->name,
                    'specialty' => $request->specialty,
                    'ssn' => $request->ssn,
                    'phone' => $request->phone,
                    'work_phone' => $request->work_phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'work_email' => $request->work_email,
                    'job_description' => $request->job_description,
                    'abstract' => $request->abstract,
                    'full_brief' => $request->full_brief,
                    'job_id' => $request->job_id,
                    'birth_date' => $request->birth_date,
                    'experience_years' => $request->experience_years,
                    'address' => $request->address,
                    'salary' => $request->salary,
                    'gender' => $request->gender,
                    'nationality' => $request->nationality,
                ]);

                $token = auth('doctor')->login($doctor);

                return $this->returnData('token', $token, 'Here Is Your Token');
            } catch (\Throwable $ex) {
                return $this->returnError($ex->getCode(), $ex->getMessage());
            }
        }
    }
    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (!$token = auth('doctor')->attempt($credentials)) {
            return $this->returnError('401', 'Unauthorized');
        }
        return $this->returnData('token', $token, 'Here Is Your Token');
    }

    public function myData()
    {
        $data = auth('doctor')->user();
        return $this->returnData('data', $data, 'Here Is Your Data');
    }
    public function logout()
    {
        auth('doctor')->logout();

        return $this->returnSuccessMessage('Successfully logged out');
    }
    public function refresh()
    {
        return $this->respondWithToken(auth('doctor')->refresh());
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'expires_in' => auth('doctor')->factory()->getTTL() * 60
        ]);
    }

    public function report(Request $request)
    {
        Report::create([
            'center_id' => auth('doctor')->user()->center_id,
            'doctor_id' => auth('doctor')->user()->id,
            'patient_id' => $request->patient_id,
            'form_id' => $request->form_id,
        ]);
        return $this->returnSuccessMessage('Successfully Reported');
    }
    public function patientTakeService(Request $request)
    {
        PatientTakeService::create([
            'booking_id' => $request->booking_id,
            'service_id' => $request->service_id,
            'cost' => $request->cost,
            'date' => $request->date,
        ]);
        return $this->returnSuccessMessage('Success');
    }
}
