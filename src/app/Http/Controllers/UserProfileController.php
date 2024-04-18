<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserProfileController extends Controller
{
    public function showProfile(): view
    {
        return view('components.create-profile');
    }
}
