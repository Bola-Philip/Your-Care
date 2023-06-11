<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    

    public function store(Request $request)
    {

        try {

                $invoice = Invoice::create([
                    'center_id' => $request->center_id,
                    'client_id' => $client_id,
                    'patient_id' => $request->patient_id,
                    'doctor_id' => $request->doctor_id,
                    'payment_due' => $request->payment_due,
                    'formal_email' => $request->formal_email,
                    'title' => $request->title,
                    'real_time' => $request->real_time,
                    'total_value' => $request->total_value,
                    'discount' => $request->discount,
                    'tax' => $request->tax,
                    'state' => $request->state,
                    'message' => $request->message,
                
                ]);
                return $this->returnData('Invoice', $invoice, 'successfully created ');
            
        } catch (\Throwable $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }


    }




    public function show($id)
    {
        try {
            $invoice = Invoice::find($id);
            if ($invoice) {
                return $this->returnData('Invoice', $invoice);
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

    }

    

    
    public function destroy($id)
    {
        try {
            $invoice = Invoice::find($id);
            if ($invoice) {
                Invoice::destroy($id);
                return $this->returnSuccessMessage('invoice Successfully deleted');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }


    
    
}
