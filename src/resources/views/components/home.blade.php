@extends('layouts.app')

@section('title', 'Microblog')

@section('content')

    <div class="flex flex-col lg:flex-row w-auto h-screen pb-8 overflow-hidden">

        <div class="flex h-1/2 lg:h-auto lg:w-2/4 pr-9 justify-center items-center overflow-hidden">
            <div class="flex h-auto w-full justify-center items-center pl-20 pb-12">
                <a href="/"><img src="assets/images/logo.png" alt="homelogo"></a>
            </div>
        </div>

        <div class="h-screen lg:h-auto lg:w-2/4 flex flex-col justify-center items-center px-4 lg:pl-24 lg:pt-32">
            <h1 class="text-3xl lg:text-5xl pb-8 text-mywhite mix-blend-overlay text-center">
                Every person has a backstory.<br>
                They are the way they are for a reason.<br>
                Consider it and show them appreciation for who they are.
            </h1>
            <h2 class="text-3xl lg:text-4xl pb-4 text-mywhite mix-blend-overlay text-center">Join us.</h2>

            <div class="buttons flex flex-col items-center">
                <button
                    class="justify-center items-center text-mydark bg-mycream box-border cursor-pointer inline-flex text-sm lg:text-base font-medium h-12 max-w-full overflow-hidden relative text-center w-full lg:w-80 px-6 py-0.5 rounded-3xl hover:bg-mywhite text-mycream focus:border-2 border-solid border-mydark mb-4">
                    <a href="signup">Create account</a>
                </button>

                <p class="text-purewhite mix-blend-overlay my-4"><b>Already have an account?</b></p>

                <button
                    class="justify-center items-center text-mycream bg-mydark box-border cursor-pointer inline-flex text-sm lg:text-base font-medium h-12 max-w-full overflow-hidden relative text-center w-full lg:w-80 px-6 py-0.5 rounded-3xl hover:bg-mywhite text-mycream focus:border-2 border-solid border-mydark">
                    <a href="signin">Sign In</a>
                </button>
            </div>
        </div>
    </div>


    <div class="px-2 py-4 text-center">
        <nav class="flex flex-wrap justify-center items-center mb-2">
            <a class="no-underline text-xs lg:text-sm text-mywhite transition-all duration-200 mx-2 my-1 border-b-transparent border-b border-solid"
                href="">Tertulio C. Labajo</a>
            <a class="no-underline text-xs lg:text-sm text-mywhite transition-all duration-200 mx-2 my-1 border-b-transparent border-b border-solid"
                href="https://github.com/janrebpol">John Rev Paul Mathew O. Roa</a>
            <a class="no-underline text-xs lg:text-sm text-mywhite transition-all duration-200 mx-2 my-1 border-b-transparent border-b border-solid"
                href="https://github.com/jeromes123">Jan Jerome P. Soriano</a>
            <a class="no-underline text-xs lg:text-sm text-mywhite transition-all duration-200 mx-2 my-1 border-b-transparent border-b border-solid"
                href="https://github.com/XPERIA679">Robin S. Soriano</a>
        </nav>
        <div class="no-underline text-xs lg:text-sm text-mywhite transition-all duration-200">
            © 2024 OJT Microblog
        </div>
    </div>

@endsection
