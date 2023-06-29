<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Traits\GeneralTrait;
use App\Http\Controllers\Controller;


class ClientController extends Controller
{
    use GeneralTrait;

    public function show(string $id)
    {
        try {
            $client = Client::find($id);
            if ($client) {
                return $this->returnData('client', $client);
            }else{
                return $this->returnError(404, "The requested client does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function create()
    {
        return view('api.admin.client.new');
    }
    public function store(Request $request)
    {
        try {
            $client = Client::create([
                'center_id' => auth('admin')->user()->center_id,
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
            return $this->returnData('Client', $client, 'Client successfully added');
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $client = Client::find($id);
            if ($client) {
                $client->update([
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
                return $this->returnData('Client', $client, 'Client successfully edited');
            } else {
                return $this->returnError(404, "The requested client does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $center = Client::find($id);
            if ($center) {
                Client::destroy($id);
                return $this->returnSuccessMessage('Client Successfully deleted');
            } else {
                return $this->returnError(404, "The requested client does not exist !");
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }
}
