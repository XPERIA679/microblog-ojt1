<section class="lg:col-span-1">
    <div class="py-16">
        <h1 class="text-3xl lg:text-5xl pb-8 text-mywhite text-center">
            Every person has a backstory.<br>
            They are the way they are for a reason.<br>
            Consider it and show them appreciation for who they are.
        </h1>
        <h2 class="text-3xl lg:text-4xl pb-4 text-mywhite text-center">Join us.</h2>
        <div class="buttons flex flex-col items-center">
            @auth
                <button onclick="redirectToNewsfeed()" class="mt-12 justify-center items-center text-mycream bg-mydark cursor-pointer inline-flex text-sm lg:text-base font-semibold h-12 w-full overflow-hidden lg:w-80 px-6 py-1 rounded-3xl hover:text-mydark hover:bg-mywhite transition-all">
                    Go to Newsfeed
                </button>
            @else
                <x-buttons.signup-btn />
                <p class="text-mywhite my-4"><b>Already have an account?</b></p>
                <x-buttons.signin-btn />
            @endauth
        </div>
    </div>
</section>
