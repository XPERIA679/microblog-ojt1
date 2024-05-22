<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashController extends Controller
{
    /**
     * Return view user to homepage.
     */
    public function showDash(): view
    {
        return view('components.newsfeeds');
    }
}
