<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class clientController extends Controller
{
    public function create()
    {
        return view('api.admin.client.new');
    }
    public function store(Request $request)
    {
        $client = Client::create([
            'center_id' => auth()->center_id,
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
}
