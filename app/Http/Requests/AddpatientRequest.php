<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class AddpatientRequest extends FormRequest
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
            "name" => "required|string",
            "username" => "required|string",
            // "birth_date" => "required|date",
            "ssn" => "required|string",
            "phone" => "required|string",
            "email" => "required|email|unique:admins|unique:centers|unique:clients|unique:patients",            
            "password" => "required|string",
            "address" => "required|string",
            "length" => "required|string",
            "weight" => "required|string",
            "bloodType" => "required|string",
            "gender" => "required|string",
            "nationality" => "required|string"  
            

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