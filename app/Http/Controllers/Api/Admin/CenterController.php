<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddDoctorRequest;
use App\Http\Requests\AddLabRequest;
use App\Http\Requests\AddpatientRequest;
use App\Http\Requests\AddPharmacyRequest;
use App\Models\Center;
use App\Models\Admin;
use App\Models\CenterService;
use App\Traits\GeneralTrait;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Lab;
use App\Models\Patient;
use App\Models\Pharmacy;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CenterController extends Controller
{
    use GeneralTrait;
    use ImageTrait;

    public function show(string $id)
    {
        try {
            $center = Center::with(['doctors','departments','rates','favorites'])->find($id);
            if ($center) {
                return $this->returnData('center', $center);
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function myAdmins($id)
    {
        $centerAdmins = Center::find($id);
        $admins = $centerAdmins->admins;
        return $this->returnData('center', $admins);

    }

    public function myClients($id)
    {
        $centerClients = Center::find($id);
        $clients = $centerClients->clients;
        return $this->returnData('center', $clients);

    }

    public function myEmployees($id)
    {
        $centerEmployees = Center::find($id);
        $employees = $centerEmployees->employees;
        return $this->returnData('center', $employees);

    }

    public function myInsuranceCompanies($id)
    {
        $centerInsuranceCompanies = Center::find($id);
        $insuranceCompanies = $centerInsuranceCompanies->insuranceCompanies;
        return $this->returnData('center', $insuranceCompanies);

    }

    public function myReports($id)
    {
        $centerReports = Center::find($id);
        $reports = $centerReports->reports;
        return $this->returnData('center', $reports);

    }
    public function store(Request $request)
    {
        try {
            $rules = [
                "name" => "required|string",
                "username" => "required|string",
                "subscription_type" => "required|string",
                "subscription_period" => "required|string",
                "email" => "required|string|unique:centers",
                "password" => "required",
                "country" => "required"
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                if ($request->logo)
                    $logo = $this->saveImage($request->logo, 'images/logos/centers');
                else $logo = 0;
                $center = Center::create([
                    'logo_path' => $logo,
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
                    'zipCod' => $request->zip_code,
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter,
                    'snapchat' => $request->snapchat,
                    'youtube' => $request->youtube,
                ]);
                $admin = Admin::create([
                    'center_id' => $center->id,
                    'name' => $center->name,
                    'username' => $center->username,
                    'password' => $center->password,
                    'phone' => $center->phone,
                    'email' => $center->email,
                    'country' => $center->country,
                    'permission' => 'admin',
                ]);

                //login
                $center->token = auth('admin')->login($admin);
                return $this->returnData('Center', $center, 'Here is your data');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $id = auth('admin')->user()->center_id;
            $center = Center::find($id);
            if ($center) {
                $admin = $center->admins()->where('permission', 'admin');
                $admin = Admin::where('center_id', '=', $id)->get();
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
                    if ($request->logo)
                        $logo = $this->saveImage($request->logo, 'images/logos/centers');
                    else $logo = 0;
                    $center->update([
                        'logo_path' => $logo,
                        'name' => $request->name,
                        'username' => $request->username,
                        'email' => $request->email,
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
                        'country' => $request->country,
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
                    $center->token = auth('admin')->refresh();
                    return $this->returnData('center', $center);
                }
            } else {
                return $this->returnError(404, "The requested center does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function myData()
    {
        try {
            $data = Center::with(['doctors','rates','favorites'])->findOrFail(auth('admin')->user()->center_id);
            return $this->returnData('data', $data, 'Here Is Your Data');
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function delete()
    {
        try {
            Center::destroy(auth('admin')->user()->center_id);
            return $this->returnSuccessMessage('Center Successfully deleted');
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
    // =====================Departments==================

    public function showDepartment($id)
    {
        try {
            $department = Department::find($id);
            if ($department) {
                return $this->returnData('department', $department);
            } else {
                return $this->returnError(404, "The requested department does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }


    public function createDepartment(Request $request)
    {
        try {
            $image = $this->saveImage($request->image, 'images/centers/departments');
            $department = Department::create([
                'center_id' => auth('admin')->user()->center_id,
                'name' => $image,
                'image_path' => $request->image_path,
                'description' => $request->description,
            ]);
            return $this->returnData('department', $department);
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function updateDepartment($id, Request $request)
    {
        try {
            $department = Department::find($id);
            if ($department) {
                $image = $this->saveImage($request->image, 'images/centers/departments');
                $department->update([
                    'name' => $image,
                    'image_path' => $request->image_path,
                    'description' => $request->description,
                ]);
                return $this->returnData('department', $department);
            } else {
                return $this->returnError(404, "The requested department does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }


    public function deleteDepartment($id)
    {
        try {
            $department = Department::find($id);
            if ($department) {
                Department::destroy($id);
                return $this->returnSuccessMessage('Department successfully deleted');
            } else {
                return $this->returnError(404, "The requested department does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    // =====================Services==================

    public function showService($id)
    {
        try {
            $service = CenterService::find($id);
            if ($service) {
                CenterService::destroy($id);
                return $this->returnData('center service', $service);
            } else {
                return $this->returnError(404, "The requested service does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function createService(Request $request)
    {
        try {
            $service = CenterService::create([
                'center_id' => auth('admin')->user()->center_id,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
            ]);
            return $this->returnData('center service', $service);
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function updateService($id, Request $request)
    {
        try {
            $service = CenterService::find($id);
            if ($service) {
                $service->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                ]);
                return $this->returnData('center service', $service);
            } else {
                return $this->returnError(404, "The requested service does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function deleteService($id)
    {
        try {
            $service = CenterService::find($id);
            if ($service) {
                CenterService::destroy($id);
                return $this->returnSuccessMessage('Service successfully deleted');
            } else {
                return $this->returnError(404, "The requested service does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }


    /////////////ADD DOCTOR TO MY CENTER///////////////////

    public function addDoctor(Request $request)
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
                    'center_id' =>auth('admin')->user()->center_id,
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
                return $this->returnData('Doctor', $doctor, 'Doctor has been successfully added');
            } catch (\Throwable $ex) {
                return $this->returnError($ex->getCode(), $ex->getMessage());
            }
        }
    }


    ////////////////ADD PATIENT TO MY CENTER////////////////
    public function addPatient(Request $request)
    {
        try {
            $rules = [
                "email" => "required|string|unique:patients",
                "password" => "required|string",
                "country" => "required",
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
                    'center_id' =>auth('admin')->user()->center_id,
                    'insurance_company_id' => $request->insurance_company_id,
                    'image_path' => 'images/patients'.$patient_image,
                    'name' => $request->name,
                    'username' => $request->username,
                    'birth_date' => $request->birth_date,
                    'ssn' => $request->ssn,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'address' => $request->address,
                    'country' => $request->country,
                    'length' => $request->length,
                    'weight' => $request->weight,
                    'bloodType' => $request->bloodType,
                    'gender' => $request->gender,
                    'nationality' => $request->nationality,
                ]);
                return $this->returnData('Patient', $patient, 'Patient successfully added');
            }

            return $this->returnData('Patient', $patient, 'Patient has been successfully added');
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }


    ////////////////ADD LAB TO MY CENTER//////////////////////////////////

    public function addLab(Request $request)
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

                return $this->returnData('Your Data', $lab, 'Lab successfully added');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
  
 ///////////////////////// ADD PHARMACY TO MY CENTER //////////////////
  
  public function addPharmacy(Request $request)
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
                    'image_path' => $pharmacy_image,
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

                return $this->returnData('Your Data', $pharmacy, '  Pharmacy successfully added');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    //////////remove//////////

    public function removeDoctor($id)

    {
        try {
            $doctor = Doctor::findOrFail($id);
        if ($doctor) {
            $doctor->destroy($id);
                return $this->returnSuccessMessage('Doctor Successfully deleted');
            } else {
                return $this->returnError('0', 'this Id not found');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

     public function removePatient($id)
    {
        try {
            $patient = Patient::findOrFail($id);
            if ($patient) {
                $patient->destroy($id);
                return $this->returnSuccessMessage('Patient Successfully deleted');
            } else {
                return $this->returnError('0', 'this Id not found');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function removeLab($id)
    {
        try {
            $lab = Lab::findOrFail($id);
        if ($lab) {
            $lab->destroy($id);
            return $this->returnSuccessMessage('Lab Successfully deleted');
            }else{
                return $this->returnError('0','this Id not found');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function removePharmacy($id)
    {
        try {
            $pharmacy = Pharmacy::findOrFail($id);
        if ($pharmacy) {
            $pharmacy->destroy($id);
                return $this->returnSuccessMessage('Pharmacy Successfully deleted');
            } else {
                return $this->returnError('0', 'this Id not found');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }



}
