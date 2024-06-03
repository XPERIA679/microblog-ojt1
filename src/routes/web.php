<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\PostShareController;
use App\Http\Controllers\PostCommentController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\AuthenticateWithErrorView;

Route::get('/', [HomeController::class, 'showHome']);
Route::get('/email/verify/{id}/{hash}', [SignupController::class, 'verifyEmail'])->middleware(['signed'])->name('verification.verify');
Route::get('/resend-email', [SignupController::class, 'sendVerificationNotification']);
Route::post('/email/verification-notification', [SignupController::class, 'sendVerificationNotification'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/verification-page/{userEmail}', [SignupController::class, 'showVerificationPage']);

Route::middleware([AuthenticateWithErrorView::class])->group(function () {
    Route::get('/posts-page', [UserPostController::class, 'showPostsPage']);
    Route::get('/edit-post-page/{post}', [UserPostController::class, 'showEditPostPage']);
    Route::get('/logout', [SigninController::class, 'logout']);
    Route::get('/update-profile', [ProfileController::class, 'showUpdateProfile']);
    Route::post('/update-profile', [ProfileController::class, 'update']);
    Route::post('/create-post', [UserPostController::class, 'create']);
    Route::post('/like-post', [UserPostController::class, 'likePost']);
    Route::post('/share-post', [PostShareController::class, 'create']);
    Route::put('/edit-post', [UserPostController::class, 'edit']);
    Route::delete('/unlike-post', [UserPostController::class, 'unlikePost']);
    Route::delete('/delete-post/{post}', [UserPostController::class, 'delete']);
    Route::post('/add-comment', [PostCommentController::class, 'create'])->name('post.comment.create');
    Route::delete('/delete-comment', [PostCommentController::class, 'delete']);
    Route::put('/edit-comment', [PostCommentController::class, 'update']);
});

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::post('/register', [SignupController::class, 'register']);
    Route::post('/login', [SigninController::class, 'login']);
});

Route::fallback(fn() => view('components.errors.not-found'));
