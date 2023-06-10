<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InsuranceCompany;
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
}
