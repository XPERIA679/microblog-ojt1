<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class SignupController extends Controller
{
    public function showSignup(): view
    {
        return view('auth.signup');
    }
}


