@extends('layouts.app')

@section('title', 'Email Verification Notice')

@section('content')
<main class="flex justify-center items-center h-screen">
<div class="form-container">
    <div class="title">
        <h3>Email Verification Required</h3>
    </div>

    <div class="user-details">
        <p>
            Before proceeding, please check your email for a verification link. If you haven't received the email, please click the button below to request another verification link.
        </p>
        <p>Resend Verification Email in <span id="countdown"></span> seconds</p><br>
        <form method="GET" action='/resend-email'>
            <div class="input-box3">
            @csrf
            <p>Your Email: </p>
            <input type="email" value="{{ $userEmail }}" disabled>
            <input type="hidden" name="userEmail" value="{{ $userEmail }}">
            </div>
            <div class="input-boxe">
            <button class="items-center text-mydark bg-mycream box-border cursor-pointer inline-flex text-sm font-medium h-12 max-w-full overflow-hidden relative text-center w-auto px-6 py-0.5 rounded-3xl hover:bg-mygray text-mycream focus:border-2 border-solid border-mydark mt-4" type="submit">Resend Verification Email</button>
            </div>
        </form>
    </div>
</main>
