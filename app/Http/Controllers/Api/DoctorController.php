<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\DoctorExperience;
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
    }

    public function show($doctor_id)
    {
        $data = Doctor::find($doctor_id);
        return $this->returnData('data', $data, 'Here Is Your Data');
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

                $doctor->token = auth('doctor')->login($doctor);

                return $this->returnData('Doctor', $doctor, 'Here Is Your Token');
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
        $doctor = Doctor::with([
            'center',
            'department',
            'doctorExperiences',
            'workTimes',
            'patients',
            'bookingRequests',
            // 'services',
            'samples',
            'reports',
            'invoices',
            'rates',
            'favorites',
        ])->find(auth('doctor')->user()->id);
        $doctor->token = $token;
        return $this->returnData('token', $doctor, 'Here Is Your Token');
    }

    public function myData()
    {
        $data = auth('doctor')->user();
        return $this->returnData('My Data', $data, 'Here Is Your Data');
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

    public function addReport(Request $request)
    {
        $report_file = $this->saveImage($request->report, 'files/reports');

        $report = Report::create([
            'center_id' => auth('doctor')->user()->center_id,
            'doctor_id' => auth('doctor')->user()->id,
            'patient_id' => $request->patient_id,
            'file_path' => $report_file,
        ]);
        return $this->returnData("report", $report, 'Report has been added successfully');
    }

    public function myReports($id)
    {
        $doctor =  Doctor::find($id)->first();
        return $this->returnData("Reports", $doctor->reports());
    }

    public function patientTakeService(Request $request)
    {
        $scout = PatientTakeService::create([
            'booking_id' => $request->booking_id,
            'service_id' => $request->service_id,
            'detection_recommendations' => $request->notes,
            'cost' => $request->cost,
            'date' => $request->date,
        ]);
        $scout->doctor_id = auth('doctor')->user()->id;
        return $this->returnData('Scout', $scout, "");
    }

    public function edit(Request $request, $id)
    {
        $doctor_image = $this->saveImage($request->image, 'images/doctors');

        $doctor = Doctor::find($id);
        $doctor->update([
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

        $doctor = Doctor::with([
            'center',
            'department',
            'doctorExperiences',
            'workTimes',
            'patients',
            'bookingRequests',
            // 'services',
            'samples',
            'reports',
            'invoices',
            'rates',
            'favorites',
        ])->find(auth('doctor')->user()->id);
        $doctor->token = auth('doctor')->refresh();
        return $this->returnData("Doctor", $doctor, "Doctor has been successfully edited");
    }

    public function experience(Request $request, $id)
    {
        $experience = DoctorExperience::create([
            'doctor_id' => $id,
            'experience_name' => $request->name,
            'work_place_name' => $request->place_name,
            'work_place_country' => $request->place_country,
            'started_at' => $request->started_at,
            'finished_at' => $request->finished_at,
            'still_works' => $request->still_in,
        ]);
        return $this->returnData("Experience", $experience, 'Experience has been successfully added');
    }
}
