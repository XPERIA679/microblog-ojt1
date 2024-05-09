<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPostController;
use App\Http\Middleware\AuthenticateWithErrorView;
use App\Http\Middleware\RedirectIfAuthenticated;

Route::get('/', [
    HomeController::class,
     'showHome']);

Route::get('/email/verify/{id}/{hash}', [
    SignupController::class,
    'verifyEmail'
])->middleware(['signed'])->name('verification.verify');

Route::get('/resend-email', [
    SignupController::class,
    'sendVerificationNotification'
]);

Route::post('/email/verification-notification', [
    SignupController::class,
    'sendVerificationNotification'
])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware([AuthenticateWithErrorView::class])->group(function () {
    Route::get('/posts-page', [UserPostController::class, 'showPostsPage']);
    Route::post('/create-post', [UserPostController::class, 'create']);
    Route::get('/edit-post-page/{post}', [UserPostController::class, 'showEditPostPage']);
    Route::put('/edit-post', [UserPostController::class, 'edit']);
    Route::delete('/delete-post/{post}', [UserPostController::class, 'delete']);
    Route::post('/like-post/{post}', [UserPostController::class, 'likePost']);
    Route::delete('/unlike-post/{post}', [UserPostController::class, 'unlikePost']);
    Route::get('/logout', [SigninController::class, 'logout']);
    Route::post('/update-profile', [ProfileController::class, 'update']);

    Route::get('/update-profile', function () {
        $profile = Profile::where('user_id', auth()->user()->id)->firstOrFail();
        return view('components.create-profile', ['profile' => $profile]);
    });
});

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::post('/register', [SignupController::class, 'register']);
    Route::post('/login', [SigninController::class, 'login']);
    Route::get('/signup', [SignupController::class,'showSignup']);
    Route::get('/signin', [SigninController::class, 'showSignin']);
});

Route::fallback(function () {
    return view('components.errors.not-found');
});