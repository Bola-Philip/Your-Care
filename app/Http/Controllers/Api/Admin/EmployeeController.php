<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Traits\GeneralTrait;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    use GeneralTrait;
    use ImageTrait;
    public function __construct()
    {
    }
    public function register(Request $request)
    {
            try {
                if($request->image)
                $emp_image = $this->saveImage($request->image, 'images/employees');
                else $emp_image=0;
                $employee = Employee::create([
                    'center_id' => $request->center_id,
                    'department_id' => $request->department_id,
                    'image_path' =>$emp_image,
                    'username' => $request->username,
                    'name' => $request->name,
                    'email' => $request->email,
                    'ssn' => $request->ssn,
                    'phone' => $request->phone,
                    'salary_per_hour' => $request->salary_per_hour,
                    'total_salary' => $request->total_salary,
                    'address' => $request->address,
                    'country' => $request->country,
                    'province' => $request->province,
                    'city' => $request->city,
                    'zip_code' => $request->zip_code,
                    'gender' => $request->gender,
                    'nationality' => $request->nationality,
                ]);

                return $this->returnData('Employee', $employee, 'Here Is Your Data');
            } catch (\Throwable $ex) {
                return $this->returnError($ex->getCode(), $ex->getMessage());
            }
    }

}
