<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Traits\GeneralTrait;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    use GeneralTrait;
    use ImageTrait;
    public function __construct()
    {
    }

    public function show($id)
    {
        try {
            $employee = Employee::find($id);
            if ($employee) {
                return $this->returnData('Employee', $employee, 'Here is your employee');
            } else {
                return $this->returnError(404, "The requested employee does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            if ($request->image)
                $emp_image = $this->saveImage($request->image, 'images/employees');
            else $emp_image = 0;
            $employee = Employee::create([
                'center_id' =>auth('admin')->user()->center_id,
                'department_id' => $request->department_id,
                'image_path' => 'images/employees'.$emp_image,
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

            return $this->returnData('Employee', $employee, 'Here is your employee');
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
            $employee = Employee::find($id);
            if ($employee) {
                if ($request->image)
                    $emp_image = $this->saveImage($request->image, 'images/employees');
                else $emp_image = 0;
                $employee->update([
                    'department_id' => $request->department_id,
                    'image_path' => 'images/employees'.$emp_image,
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

                return $this->returnData('Employee', $employee, 'Here is your employee');
            } else {
                return $this->returnError(404, "The requested employee does not exist !");
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $employee = Employee::find($id);
            if ($employee) {
              Employee::destroy($id);
                return $this->returnSuccessMessage('Employee successfully deleted');
            } else {
                return $this->returnError(404, "The requested employee does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
}
