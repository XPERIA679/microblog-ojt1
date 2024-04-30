@extends('layouts.app')

@section ('title', 'Microblog')

@section('content')

<div class="flex w-auto h-body-height pb-8 overflow-hidden">
    <div class="flex h-left-height w-2/4 pr-9 justify-center items-center overflow-hidden">
        <div class="flex h-auto w-full justify-center items-center pl-24 pb-14"><a href="#"><img src="assets/images/logo.png" alt="homelogo"></a></div>
    </div>

    <div class="h-screen w-6/12 items-center pl-24 pt-32">
        <h1 class="flex items-center text-5xl pb-12 text-mywhite mix-blend-overlay p-1">There is no joy <br> in possession <br> without sharing.</h1>
        <h2 class="flex items-center text-3xl pb-4 text-mywhite mix-blend-overlay">Join us.</h2>

        <div class="buttons">
            <button class="buttonh"><a href="signup">Create account</a></button>

            <div class="flex relative items-center mb-7">
                <hr class="flex w-[45%] h-0.5 bg-transparent relative animate-[lightning_5s_infinite_alternate] m-0 border-none">
            </div>

            <p class="flex mb-2.5 text-purewhite mix-blend-overlay"><b>Already have an account?</b></p>
            <button class="buttonh1"><a href="signin">Sign In</a></button>
        </div>
    </div>
</div>


@endsection
