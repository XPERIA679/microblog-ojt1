<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SigninController extends Controller
{
    public function showSignin(): view
    {
        return view('auth.signin');
    }
}
