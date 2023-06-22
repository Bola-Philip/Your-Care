<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BookingRequest;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\DoctorExperience;
use App\Models\PatientTakeService;
use App\Models\Report;
use App\Traits\GeneralTrait;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\DB;
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
        $data = Doctor::with([
            'center',
            'department',
            'doctorExperiences',
            'workTimes',
            'rates',
            'favorites'
        ])->find($doctor_id);
        return $this->returnData('data', $data, 'Here Is Your Data');
    }
    public function doctorCategories()
    {
        $category = [
            'Dentistry', 'Osteopath', 'Cardiology', 'Dermatology', 'Endocrinology', 'Hematology',
            'Gastroenterology', 'Infectious', 'Ophthalmologist', 'Nephrology', 'Neurology', 'Pediatrics',
            'Obstetrics & Gynecology', 'Oncology', 'Ophthalmology', 'Orthopedics', 'Otolaryngology',
        ];
        return $this->returnData('Doctor Categories', $category);
    }
    public function allDoctors()
    {
        try {
            $country = auth()->user()->country;
            $doctors = Doctor::where('country', $country)
                ->with(['rates', 'favorites'])
                ->makeHidden('password')
                ->all()->get();
            return $this->returnData('All Doctors', $doctors, '');
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function favoriteDoctors()
    {
        try {
            $country = auth()->user()->country;
            $doctors = Doctor::with(['favorites'])
                ->where('country', $country)
                ->orderBy(function ($doctor) {
                    return $doctor->favorites->count();
                }, 'desc')
                ->makeHidden('password')->get();
            return $this->returnData('All Doctors "sort by favorite"', $doctors, '');
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function ratedDoctors()
    {
        try {
            $country = auth()->user()->country;
            $doctors = Doctor::with(['rates'])
                ->where('country', $country)
                ->orderBy(DB::raw('SUM(rates.rate)'), 'desc')
                ->makeHidden('password')->get();
            return $this->returnData('All Doctors "sort by rating"', $doctors, '');
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    // ======================Doctors By Categories==================

    public function doctorsByCategory($category)
    {
        try {
            $country = auth()->user()->country;
            $doctors = Doctor::where('country', $country)
                ->with(['rates', 'favorites'])
                ->where('specialty', $category)
                ->makeHidden('password')
                ->all()->get();
            return $this->returnData('All Doctors', $doctors, '');
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function favoriteDoctorsByCategories($category)
    {
        try {
            $country = auth()->user()->country;
            $doctors = Doctor::with(['favorites'])
                ->where('country', $country)
                ->where('specialty', $category)
                ->orderBy(function ($doctor) {
                    return $doctor->favorites->count();
                }, 'desc')
                ->makeHidden('password')->get();
            return $this->returnData('All Doctors "sort by favorite"', $doctors, '');
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }


    public function ratedDoctorsByCategory($category)
    {
        try {
            $country = auth()->user()->country;
            $doctors = Doctor::with(['rates'])
                ->where('country', $country)
                ->where('specialty', $category)
                ->orderBy(DB::raw('SUM(rates.rate)'), 'desc')
                ->makeHidden('password')->get();
            return $this->returnData('All Doctors "sort by rating"', $doctors, '');
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    // ========================================

    public function newRequest()
    {
        $specialty = [
            'Dentistry', 'Osteopath', 'Cardiology', 'Dermatology', 'Endocrinology', 'Hematology',
            'Gastroenterology', 'Infectious', 'Ophthalmologist', 'Nephrology', 'Neurology', 'Pediatrics',
            'Obstetrics & Gynecology', 'Oncology', 'Ophthalmology', 'Orthopedics', 'Otolaryngology',
        ];
        return $this->returnData('Doctor Specialties', $specialty);
    }
    public function register(Request $request)
    {
        $rules = [
            "email" => "required|string|unique:doctors",
            "password" => "required|string",
            "country" => "required|string",
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
                    'image_path' => 'images/doctors' . $doctor_image,
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
                    'country' => $request->country,
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
            'samples',
            'reports',
            'invoices',
            'rates',
            'favorites',
        ])->find(auth('doctor')->user()->id);
        $doctor->token = $token;
        return $this->returnData('token', $doctor, 'Here Is Your Token');
    }

    public function update(Request $request)
    {
        $rules = [
            "email" => "required|string|unique:doctors",
            "password" => "required|string",
            "country" => "required|string",
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $code = $this->returnCodeAccordingToInput($validator);
            return $this->returnValidationError($code, $validator);
        } else {
            try {
                $doctor_image = $this->saveImage($request->image, 'images/doctors');

                $doctor = Doctor::find(auth('doctor')->user()->id);
                $doctor->update([
                    'center_id' => $request->center_id,
                    'department_id' => $request->department_id,
                    'image_path' => 'images/doctors' . $doctor_image,
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
                    'country' => $request->country,
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
            } catch (\Throwable $ex) {
                return $this->returnError($ex->getCode(), $ex->getMessage());
            }
        }
    }
    public function myData()
    {
        try {
            $data = auth('doctor')->user()->with([
                'center',
                'department',
                'doctorExperiences',
                'workTimes',
                'patients',
                'bookingRequests',
                'samples',
                'reports',
                'invoices',
                'rates',
                'favorites',
            ]);
            return $this->returnData('My Data', $data, 'Here Is Your Data');
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function logout()
    {
        auth('doctor')->refresh();
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
        return $this->returnData("report", $report, 'Report has been successfully added.');
    }

    public function myReports()
    {
        $doctor =  Doctor::find(auth('doctor')->user()->id)->first();
        return $this->returnData("Reports", $doctor->reports());
    }

    public function myBooks()
    {
        $doctor =  Doctor::find(auth('doctor')->user()->id)->first();
        return $this->returnData("Reports", $doctor->bookingRequests());
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

    public function rateBooking($booking_id, Request $request)
    {
        $booking = BookingRequest::findOrFail($booking_id);
        $booking->update([
            'rating' => $request->rate,
            'notes' => $request->notes,
        ]);
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

    public function destroy()
    {
        try {
            Doctor::destroy(auth('doctor')->user()->id);
            return $this->returnSuccessMessage('Your account successfully deleted');
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $doctor = Doctor::find($id);
            if ($doctor) {
                Doctor::destroy($id);
                return $this->returnSuccessMessage('Doctor successfully deleted');
            } else {
                return $this->returnError(404, "The requested doctor does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
}
