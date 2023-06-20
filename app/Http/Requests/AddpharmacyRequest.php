<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class AddPharmacyRequest extends FormRequest
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
            "image_path" => "required|string",
            "username" => "required|string",
            "password" => "required|string",
            "email" => "required|email|unique:admins|unique:centers|unique:clients",
            "work_email" => "required|string",
            "phone" => "required|string",
            "work_phone" => "required|string",
            "website" => "required|string",
            "address" => "required|string",
            "country" => "required|string",
            "state" => "required|string",
            "province" => "required|string",
            "zipCod" => "required|string",
            "instagram" => "required|string",
            "twitter" => "required|string",
            "snapchat" => "required|string",
            "youtube" => "required|string",
      
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
