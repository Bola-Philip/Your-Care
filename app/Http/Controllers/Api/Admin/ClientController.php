<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use App\Traits\GeneralTrait;
use App\Http\Controllers\Controller;


class ClientController extends Controller
{
    use GeneralTrait;
    public function create()
    {
        return view('api.admin.client.new');
    }
    public function store(StoreClientRequest $request)
    {
        try {
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
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function update(UpdateClientRequest $request,$id)
    {
        try {
             $client = Client::findOrFail($id);
             if ($client){
                $client->update([
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
                return $this->returnData('client', $client);
             }else{
                return $this->returnError('E004','this Id not found');
             }

        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
    public function show(string $id)
    {
        try {
            $client = Client::find($id);
            if ($client) {
                return $this->returnData('client', $client);
            }else{
                return $this->returnError('E004','this Id not found');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function destroy(string $id)
    {
        try {
            $center = Client::find($id);
            if ($center) {
                Client::destroy($id);
                return $this->returnSuccessMessage('Center Successfully deleted');
            }else{
                return $this->returnError('E004','this Id not found');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

}
