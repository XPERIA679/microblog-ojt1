@extends('layouts.app')

@section('title', 'Microblog')

@section('content')

    <div class="flex flex-col lg:flex-row w-auto overflow-hidden">

        <div class="lg:hidden w-full pt-2 justify-center items-center">
            <div class="flex h-auto w-full justify-center items-center pb-2">
                <a href="/"><img src="assets/images/logo.png" alt="homelogo" style="max-width: 150px;"></a>
            </div>
        </div>

        <div class="hidden lg:block lg:w-2/4 pr-9 pt-7 justify-center items-center overflow-hidden">
            <div class="flex h-auto w-full justify-center items-center pb-12">
                <a href="/"><img src="assets/images/logo.png" alt="homelogo"></a>
            </div>
        </div>

        <div class="lg:h-auto lg:w-2/4 flex flex-col pt-7 justify-center items-center px-4">
            <h1 class="text-3xl lg:text-5xl pb-8 text-mywhite mix-blend-overlay text-center">
                Every person has a backstory.<br>
                They are the way they are for a reason.<br>
                Consider it and show them appreciation for who they are.
            </h1>
            <h2 class="text-3xl lg:text-4xl pb-4 text-mywhite mix-blend-overlay text-center">Join us.</h2>

            <div class="buttons flex flex-col items-center">
                <button
                    class="justify-center items-center text-mydark bg-mycream box-border cursor-pointer inline-flex text-sm lg:text-base font-medium h-12 max-w-full overflow-hidden relative text-center w-full lg:w-80 px-6 py-0.5 rounded-3xl hover:bg-mywhite text-mycream  border-mydark mb-4 transition-all">
                    <a href="signup">Create account</a>
                </button>

                <p class="text-purewhite mix-blend-overlay my-4"><b>Already have an account?</b></p>

                <button
                    class="justify-center items-center text-mycream bg-mydark box-border cursor-pointer inline-flex text-sm lg:text-base font-medium h-12 max-w-full overflow-hidden relative text-center w-full lg:w-80 px-6 py-0.5 rounded-3xl hover:bg-mywhite text-mycream border-mydark transition-all">
                    <a href="signin">Sign In</a>
                </button>
            </div>
        </div>
    </div>

    <footer class="pt-12">
        <div class="no-underline text-xs lg:text-sm text-mywhite transition-all duration-200 text-center">
            © 2024 OJT Microblog
        </div>
        <div class="flex flex-wrap justify-center items-center text-center">
            <a class="no-underline text-xs lg:text-sm text-mywhite transition-all duration-200 mx-2 my-1 border-b-transparent border-b border-solid"
                href="">Tertulio C. Labajo</a>
            <a class="no-underline text-xs lg:text-sm text-mywhite transition-all duration-200 mx-2 my-1 border-b-transparent border-b border-solid"
                href="https://github.com/janrebpol">John Rev Paul Mathew O. Roa</a>
            <a class="no-underline text-xs lg:text-sm text-mywhite transition-all duration-200 mx-2 my-1 border-b-transparent border-b border-solid"
                href="https://github.com/jeromes123">Jan Jerome P. Soriano</a>
            <a class="no-underline text-xs lg:text-sm text-mywhite transition-all duration-200 mx-2 my-1 border-b-transparent border-b border-solid"
                href="https://github.com/XPERIA679">Robin S. Soriano</a>
        </div>
    </footer>
@endsection
