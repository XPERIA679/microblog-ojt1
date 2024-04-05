<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.forms.registration');
});

Route::get('/login', function () {
    return view('components.forms.login');
});

Route::get('/home', function () {
    return view('components.homepage.home');
});
