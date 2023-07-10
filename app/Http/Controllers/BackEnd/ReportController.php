<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    // public function index(){
    //     $doctors = Doctor::all();
    //     return view('backend.reports.f018',compact('doctors'));
    // }
    
    public function create(){
        return view('backend.reports.f018');
    }

    public function store(Request $request){
        return back();
    }
}
