<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{use ImageTrait;
    use AuthorizesRequests, ValidatesRequests;
    public function login(){
        return view('api.admin.login');
    }
    public function newForm(){
        return view('api.admin.new-form');

    }
    public function storeForm(Request $request){
        if ($request->file)
        $file = $this->saveImage($request->file, 'images/forms/pdf');
    else $file = 0;
        Form::create([
            'title'=>$file
        ]);
    }
}
