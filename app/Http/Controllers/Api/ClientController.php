<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\FuncCall;

class ClientController extends Controller
{
    // public function create()
    // {
    //     return view('api.admin.client.new');
    // }
    public function store(Request $request)
    {
        try {
            $rules = [
                "email" => "required|string|unique:clients",
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            } else {

                $client = Client::create([
                    'center_id' => $request->center_id,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'company_name' => $request->company_name,
                    'phone' => $request->phone,
                    'phone_description' => $request->phone_description,
                    'email' => $request->email,
                    'email_description' => $request->email_description,
                    'address' => $request->address,
                    'address2' => $request->address2,
                    'web_site' => $request->web_site,
                    'country' => $request->country,
                    'city' => $request->city,
                    'province' => $request->province,
                    'zip_code' => $request->zip_code,
                ]);
                return response()->json([
                    'message' => 'Client created successfully',
                    'client' => $client
                ], 200);
            }
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
}
