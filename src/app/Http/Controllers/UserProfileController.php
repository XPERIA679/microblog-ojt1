<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
/**
 * Displays the user profile creation form
 */
class UserProfileController extends Controller
{
    public function showProfile(): view
    {
        return view('components.create-profile');
    }
}
