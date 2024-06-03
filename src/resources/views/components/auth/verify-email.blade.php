@extends('layouts.app')

@section('title', 'Email Verification')

@section('content')

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <x-logo.logo-form />
            <h2
                class="mt-10 text-center text-2xl font-semibold leading-9 mix-blend-overlay tracking-tight uppercase text-mycream">
                Email Verification Required</h2>
        </div>
        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
            <p class="text-center text-md font-medium mix-blend-overlay text-mywhite">
                Before proceeding, please check your email for a verification link. If you haven't received the email,
                please click the button below to request another verification link.

            </p>
            <p class="text-center text-md font-bold mix-blend-overlay text-mywhite mt-4">
                Resend Verification Email in <span id="countdown"></span> seconds
            </p>
            <form class="grid grid-cols-1 gap-6 mt-12" method="GET" action="/resend-email">
                @csrf
                <div class="relative my-1">
                    <input name="email" type="email" value="{{ $userEmail }}"
                        class="peer h-10 w-full bg-transparent border-b border-mywhite text-mycream placeholder-transparent focus:outline-none focus:border-mycream"
                        placeholder="Email" autocomplete="off" disabled />
                    <input type="hidden" name="userEmail" value="{{ $userEmail }}">
                    <label for="email"
                        class="absolute left-0 -top-3.5 text-mycream text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-mywhite peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-mycream peer-focus:text-sm">
                        Email
                    </label>
                    <x-buttons.resend-btn />
                </div>
            </form>
        </div>
    </div>

@endsection
