<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function convertToView()
    {
        $file = storage_path('app/public/excel/F033-THHC Nursing Care Plan Form.xls');
        $data = Excel::toArray((object)[], $file);

        return view('excel.view', compact('data'));
    }
}
