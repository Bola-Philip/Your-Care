<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login()
    {
        $users = User::get();
        return response() -> json($users);
    }
}
