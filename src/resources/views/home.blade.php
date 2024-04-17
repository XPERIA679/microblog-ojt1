@extends('layouts.app')

@section ('title', 'Microblog')

@section('content')

<div class="flex w-auto h-body-height pb-8">
    <div class="flex h-left-height w-2/4 justify-center items-center overflow-hidden">
        <div class="flex h-auto w-full justify-center items-center pl-24 pb-14"><a href="#"><img src="assets/images/logo.png" alt="homelogo"></a></div>
    </div>

    <div class="h-screen w-6/12 items-center pl-24 pt-52">
        <h1 class="flex items-center text-6xl pb-5 text-purewhite mix-blend-overlay p-1">There is no joy <br> in possession <br> without sharing.</h1>
        <h2 class="flex items-center text-3xl pb-4 text-purewhite mix-blend-overlay">Join with us.</h2>

        <div class="buttons">
            <button class="button"><a href="registration">Create account</a></button>

            <div class="flex relative items-center mb-12">
                <hr class="flex w-[45%] h-0.5 bg-transparent relative animate-[lightning_5s_infinite_alternate] m-0 border-none">
            </div>

            <p class="flex mb-2.5 text-purewhite mix-blend-overlay"><b>Already have an account?</b></p>
            <button class="button1"><a href="login">Sign In</a></button>
        </div>
    </div>
</div>
@include('partials._footer')

@endsection
