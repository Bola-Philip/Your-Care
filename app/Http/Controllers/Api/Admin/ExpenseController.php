<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use App\Models\Expense;
use App\Models\ExpenseMedia;
use App\Traits\GeneralTrait;
use App\Http\Controllers\Controller;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ExpenseController extends Controller
{
    use GeneralTrait;
    use ImageTrait;

    public function create()
    {
        return view('api.admin.expense.new');
    }

    public function store(StoreExpenseRequest $request)
    {

        //ده علشان هو هايضيف في جدولين لو في خطأ في احدهما لا يتم الحفظ هااااااااااااام
        DB::beginTransaction();
        try {
               $expense = new Expense();
               $expense->center_id = $request->center_id;
               $expense->client_id = $request->client_id;
               $expense->title = $request->title;
               $expense->expense_description = $request->expense_description;
               $expense->expense_value = $request->expense_value;
               $expense->accounting_code = $request->accounting_code;
               $expense->save();

            // insert img
            if ($request->hasfile('media_path')) {
                $patient_image = $this->saveImage($request->media_path, 'images/expenses/'.$expense->id);
                // insert in ExpenseMedia
                    $image = new ExpenseMedia();
                    $image->expense_id = $expense->id;
                    $image->media_path =$patient_image ;
                    $image->save();
            }
                DB::commit();  // insert data
                return response()->json([
                    'message' => 'Client created successfully',
                    'expense' => $expense
                ], 200);
        } catch (\Throwable $ex) {
            //            وهنا يعمل رجوع عن الحفظ
            DB::rollback();
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function update(StoreExpenseRequest $request, $id)
    {
        try {
            $expense = Expense::findOrFail($id);
            if ($expense) {
                $expense->center_id = $request->center_id;
                $expense->client_id = $request->client_id;
                $expense->title = $request->title;
                $expense->expense_description = $request->expense_description;
                $expense->expense_value = $request->expense_value;
                $expense->accounting_code = $request->accounting_code;
                $expense->save();
                return $this->returnData('expense', $expense);
            } else {
                return $this->returnError('E004', 'this Id not found');
            }

        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function show(string $id)
    {
        try {
            $expense = Expense::find($id);
            if ($expense) {
                return $this->returnData('expense', $expense);
            } else {
                return $this->returnError('E004', 'this Id not found');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    public function destroy(string $id)
    {
        try {
            // Delete img in server disk
            $this->deleteFile('expenses',$id);
            $center = Expense::find($id);
            if ($center) {
                Expense::destroy($id);
                return $this->returnSuccessMessage('Expense Successfully deleted');
            } else {
                return $this->returnError('E004', 'this Id not found');
            }
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

}
