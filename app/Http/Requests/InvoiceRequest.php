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
            "client_id" => "required|integer",
            "patient_id" => "required|integer",
            "doctor_id" => "required|integer",
            "payment_due" => "required|float",
            "title" => "required|string",
            "real_time" => "required|string",
            "total_value" => "required|string",
            "discount" => "required|string",
            "tax" => "required|string",
            "message" => "required|string",

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