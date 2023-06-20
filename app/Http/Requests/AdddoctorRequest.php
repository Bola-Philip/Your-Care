<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class AddDoctorRequest extends FormRequest
{
    
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            "center_id" => "required|integer",
            "department_id" => "required|integer",
            "image_path" => "required|string",
            "username" => "required|string",
            "name" => "required|string",
            "ssn" => "required|string",
            "phone" => "required|string",
            "work_phone" => "required|string",
            "email" => "required|email|unique:admins|unique:centers|unique:clients",
            "specialty" => "required|string",
            "work_email" => "required|string",
            "job_description" => "required|string",
            "abstract" => "required|string",
            "full_brief" => "required|string",
            "job_id" => "required|integer",
            "signature" => "required|string",
            "birth_date" => "required|string",
            "experience_years" => "required|string",
            "address" => "required|string",
            "salary" => "required|string",
            "gender" => "required|string",
            "nationality" => "required|string",
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $response = new JsonResponse([
            'data' => [],
            'message' => 'Validation Error',
            'errors' => $validator->messages()->all(),
        ], ResponseAlias::HTTP_UNPROCESSABLE_ENTITY);

        throw new ValidationException($validator, $response);
    }
}
