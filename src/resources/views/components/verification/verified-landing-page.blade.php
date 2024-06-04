@extends('layouts.app')

@section('title', 'Email Verification')

@section('content')

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <x-logo.logo-form />
            <h2
                class="mt-10 text-center text-2xl font-semibold leading-9 mix-blend-overlay tracking-tight uppercase text-mycream">
                You are now verified!</h2>
        </div>
        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
            <p class="text-center text-md font-medium mix-blend-overlay text-mywhite pb-5">
                You may now login using your registered Username and Password.
                Press the back button to login your account now.
            </p>

            <div class="relative my-1">
                <x-buttons.landing-page-btn/>
            </div>
        </div>
    </div>

@endsection
