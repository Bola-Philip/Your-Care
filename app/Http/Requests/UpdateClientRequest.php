<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class UpdateClientRequest extends FormRequest
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
            "first_name" => "required|string",
            "last_name" => "required|string",
            "company_name" => "required|string",
            "phone" => "required|string",
            "phone_description" => "required|string",
            "email" => "required|email|unique:admins,email|unique:centers,email|unique:clients,email," . $this->id,
            "email_description" => "required|string",
            'address' => "required|string",
            'address2' =>"required|string",
            'web_site' => "required|string",
            "country" => "required|string",
            "city" => "required|string",
            "province" => "required|string",
            "zip_code" => "required|string",
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
