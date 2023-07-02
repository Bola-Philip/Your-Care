<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function create(){
        return view('backend.reports.f018');
    }

    public function store(Request $request){
        return back();
    }
}
