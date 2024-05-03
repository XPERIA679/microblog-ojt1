<?php

use App\Models\Profile;
use App\Models\UserPost;
use App\Models\PostMedia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPostController;


Route::get('/', [
    HomeController::class,
     'showHome']);

Route::get('/signup', [
    SignupController::class,
     'showSignup']);

Route::get('/signin', [
    SigninController::class,
     'showSignin']);

Route::get('/logout', [
    SigninController::class,
     'logout']);

Route::get('/email/verify/{id}/{hash}', [
    SignupController::class,
    'verifyEmail'
])->middleware(['signed'])->name('verification.verify');

Route::get('/resend-email', [
    SignupController::class,
    'sendVerificationNotification'
]);

Route::get('/update-profile', function () {
    $profile = Profile::where('user_id', auth()->user()->id)->firstOrFail();
    return view('components.create-profile', ['profile' => $profile]);
});

Route::post('/update-profile', [
    ProfileController::class,
    'update'
]);

Route::post('/email/verification-notification', [
    SignupController::class,
    'sendVerificationNotification'
])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::post('/register', [
    SignupController::class,
    'register'
]);

Route::post('/login', [
    SigninController::class,
    'login'
]);

Route::middleware(['auth'])->group(function () {
    Route::get('/posts-page', [UserPostController::class, 'showPostsPage']);
    Route::post('/create-post', [UserPostController::class, 'create']);
    Route::get('/edit-post-page/{post}', [UserPostController::class, 'showEditPostPage']);
    Route::put('/edit-post', [UserPostController::class, 'edit']);
});
