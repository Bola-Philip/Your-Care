<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddpatientRequest;
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



    public function store(Request $request)
    {

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
                    $logo = $this->saveImage($request->logo, 'images/logo/insurances');
                else $logo = 0;
                $insurance = InsuranceCompany::create([
                    'center_id' => $request->center_id,
                    'logo_path' => $logo,
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
                return $this->returnData('insurance_company', $insurance, 'successfully created ');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }


    }

    public function update(Request $request)
    {
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
                    $logo = $this->saveImage($request->logo, 'images/logo/insurances');
                else $logo = 0;
                $insurance = InsuranceCompany::create([
                    'center_id' => $request->center_id,
                    'logo_path' => $logo,
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
                return $this->returnData('insurance_company', $insurance, 'successfully created ');
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }


    public function show($id)
    {
        try {
            $insuranceCompany = InsuranceCompany::find($id);
            if ($insuranceCompany) {
                return $this->returnData('insuranceCompany', $insuranceCompany);
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

    }

    public function addPatient(AddpatientRequest $request){

        $patient_image = $this->saveImage($request->image, 'images/patients');
        if ($request->image)
        $patient_image = $this->saveImage($request->image, 'images/patients');
        else $patient_image = 0;

        $patient = new Patient();
        $patient->center_id = $request->center_id;
        $patient->insurance_company_id = $request->insurance_company_id;
        $patient->name = $request->name;
        $patient->username = $request->username;
        $patient->birth_date = $request->birth_date;
        $patient->ssn = $request->ssn;
        $patient->phone = $request->phone;
        $patient->email = $request->email;
        $patient->password = $request->password;
        $patient->signature = $request->signature;
        $patient->address = $request->address;
        $patient->length = $request->length;
        $patient->weight = $request->weight;
        $patient->bloodType = $request->bloodType;
        $patient->gender = $request->gender;
        $patient->nationality = $request->nationality;
        $patient->image_path =   $patient_image ;

        // يمكنك إضافة المزيد من الحقول هنا

        $patient->save();

        return response()->json(['message' => 'تمت إضافة المريض بنجاح']);
    }





    public function removePatient(string $id)
    {
        try {
            $center = Patient::find($id);
            if ($center) {
                Patient::destroy($id);
                return $this->returnSuccessMessage('Patient Successfully deleted');
            }else{
                return $this->returnError('0','this Id not found');
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
                return $this->returnSuccessMessage('InsuranceCompany Successfully deleted');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

}
