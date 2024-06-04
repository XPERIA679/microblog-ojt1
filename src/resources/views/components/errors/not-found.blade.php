@extends('layouts.app')

@section('title', '404 Page Not Found')

@section('content')

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <x-logo.logo-form />
            <h2
                class="mt-10 text-center text-2xl font-semibold leading-9 mix-blend-overlay tracking-tight uppercase text-mycream">
                404 Error - Page Not Found</h2>
        </div>
        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
            <p class="text-center text-md font-medium mix-blend-overlay text-mywhite">
                Sorry, the page you're looking for doesn't exist. Please check the URL or return to the homepage.
            </p>
            <div class="flex justify-center items-center mt-10">
                <button href="#" onclick="goBack()">
                <x-svgs.back-icon />
                </button>
            </div>
        </div>
    </div>

@endsection
