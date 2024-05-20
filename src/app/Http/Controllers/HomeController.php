<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Return view user to homepage.
     */
    public function showHome(): view
    {
        return view('components.home');
    }
}
