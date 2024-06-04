@extends('layouts.app')

@section('title', 'Please, Sign out!')

@section('content')

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <x-logo.logo-form />
            <h2
                class="mt-10 text-center text-2xl font-semibold leading-9 mix-blend-overlay tracking-tight uppercase text-mycream">
                Oops! Please, sign out!</h2>
        </div>
        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
            <p class="text-center text-md font-medium mix-blend-overlay text-mywhite">
                To create or access a new account, ensure you are logged out first.
            </p>
            <div class="flex justify-center items-center mt-10">
                <form method="GET" action="/">
                <button href="submit">
                <x-svgs.back-icon />
                </button>
                </form>
            </div>
        </div>
    </div>

@endsection
