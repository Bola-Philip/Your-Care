<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InsuranceCompany;
use App\Models\Patient;
use App\Traits\GeneralTrait;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Validator;

class InsuranceCompanyController extends Controller
{
    use GeneralTrait;
    use ImageTrait;

    public function show($id)
    {
        try {
            $insuranceCompany = InsuranceCompany::find($id);
            if ($insuranceCompany) {
                return $this->returnData('insuranceCompany', $insuranceCompany);
            } else {
                return $this->returnError(404, "The requested patient does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function store(Request $request)
    {
        $rules = [
            "email" => "required|string|unique:insurance_companies",
        ];
        $validator = Validator::make($request->all(), $rules);
        try {
            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {
                if ($request->logo)
                    $logo = $this->saveImage($request->logo, 'images/logos/insurances');
                else $logo = "";
                $insurance = InsuranceCompany::create([
                    'center_id' => auth('admin')->user()->center_id,
                    'logo_path' => 'images/logos/insurances'.$logo,
                    'name' => $request->name,
                    'description' => $request->description,
                    'email' => $request->email,
                    'formal_email' => $request->formal_email,
                    'phone' => $request->phone,
                    'formal_phone' => $request->formal_phone,
                    'website' => $request->website,
                    'address' => $request->address1,
                    'country' => $request->country,
                    'state' => $request->state,
                    'province' => $request->province,
                    'zip_code' => $request->zipCod,
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter,
                    'snapchat' => $request->snapchat,
                    'youtube' => $request->youtube,
                ]);
                return $this->returnData('insurance_company', $insurance, 'Insurance Company successfully added');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        $insurance = InsuranceCompany::find($id);
        if ($insurance) {
            try {
                $rules = [
                    "email" => "required|string|unique:insurance_companies",
                ];
                $validator = Validator::make($request->all(), $rules);

                if ($validator->fails()) {
                    $code = $this->returnCodeAccordingToInput($validator);
                    return $this->returnValidationError($code, $validator);
                } else {
                    if ($request->logo)
                        $logo = $this->saveImage($request->logo, 'images/logos/insurances');
                    else $logo = "";
                    $insurance->update([
                        'logo_path' => 'images/logos/insurances'.$logo,
                        'name' => $request->name,
                        'description' => $request->description,
                        'email' => $request->email,
                        'formal_email' => $request->formal_email,
                        'phone' => $request->phone,
                        'formal_phone' => $request->formal_phone,
                        'website' => $request->website,
                        'address' => $request->address1,
                        'country' => $request->country,
                        'state' => $request->state,
                        'province' => $request->province,
                        'zip_code' => $request->zipCod,
                        'facebook' => $request->facebook,
                        'instagram' => $request->instagram,
                        'twitter' => $request->twitter,
                        'snapchat' => $request->snapchat,
                        'youtube' => $request->youtube,
                    ]);
                    return $this->returnData('insurance_company', $insurance, 'Insurance Company successfully edited');
                }
            } catch (\Throwable $ex) {
                return $this->returnError($ex->getCode(), $ex->getMessage());
            }
        } else {
            return $this->returnError(404, "The requested Insurance Company does not exist !");
        }
    }


    public function addPatient($insurance_id, $patient_id)
    {
        try {
            $patient = Patient::find($patient_id);
            if ($patient) {
                $patient->insurance_company_id = $insurance_id;
                return $this->returnSuccessMessage('Patient Successfully added to this Insurance Company');
            } else {
                return $this->returnError(404, "The requested patient does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }


    


    public function removePatient($id)
    {
        try {
            $patient = Patient::find($id);
            if ($patient) {
                $patient->insurance_company_id = "";
                return $this->returnSuccessMessage('Patient Successfully removed from this Insurance Company');
            } else {
                return $this->returnError(404, "The requested patient does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }



    public function destroy($id)
    {
        try {
            $insuranceCompany = InsuranceCompany::find($id);
            if ($insuranceCompany) {
                InsuranceCompany::destroy($id);
                return $this->returnSuccessMessage('Insurance Company Successfully deleted');
            } else {
                return $this->returnError(404, "The requested patient does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
}
