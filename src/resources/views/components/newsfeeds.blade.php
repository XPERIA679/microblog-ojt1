@extends('layouts.app')

@section('title', 'Microblog')

@section('content')


    <div class="flex justify-center items-center">
        <main class="grid lg:grid-cols-3 gap-6 my-12 mx-12 w-2xl container p-2 justify-center relative">

            <section class="lg:col-span-1">

                <div class="shadow rounded-lg p-10 bg-mydark">
                    <div class="flex flex-col gap-1 text-center items-center">
                        <img class="h-32 w-32 object-cover rounded-full shadow mb-4" src="assets/images/moon.jpg"
                            alt="moon">
                        <p class="font-semibold text-mywhite">Moon</p>
                        <div class="text-sm leading-normal text-mycream flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-3 h-3 mr-2 cursor-pointer hover:fill-mygray">
                                <path
                                    d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                <path
                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                            </svg>
                            God's timing, god's planning.
                        </div>
                    </div>
                    <div class="flex justify-center items-center gap-6 mt-5">
                        <div class="font-semibold text-center">
                            <p class="text-mywhite cursor-pointer hover:text-mygray">69</p>
                            <span class="text-mycream cursor-pointer hover:text-mygray">Posts</span>
                        </div>
                        <div class="font-semibold text-center">
                            <p class="text-mywhite cursor-pointer hover:text-mygray">1.3M</p>
                            <span class="text-mycream cursor-pointer hover:text-mygray">Followers</span>
                        </div>
                        <div class="font-semibold text-center">
                            <p class="text-mywhite cursor-pointer hover:text-mygray">1</p>
                            <span class="text-mycream cursor-pointer hover:text-mygray">Following</span>
                        </div>
                    </div>
                    <div class="flex justify-center items-center mt-2">
                        <button
                            class="flex justify-center font-medium text-base items-center bg-mycream text-mydark hover:bg-mygray hover:text-mycream rounded-lg p-3">
                            Edit Profile
                        </button>
                    </div>
                </div>

                {{-- <div class="bg-mycream shadow mt-6  rounded-lg p-6">
                    <h3 class="text-gray-600 text-sm font-semibold mb-4">DIKOPAALAMILALAGAY</h3>

                </div> --}}
            </section>



            <section class="lg:col-span-2">

                <form class="bg-mycream shadow rounded-lg mb-6 p-4 items-center">
                    <textarea name="message" placeholder="Share your thoughts.."
                        class="w-full rounded-lg p-2 text-sm bg-mywhite border border-transparent appearance-none rounded-tg placeholder-mygray resize-none overflow-x-hidden"></textarea>
                    <footer class="flex justify-between mt-2">
                        <div class="flex gap-2">
                            <span
                                class="flex items-center transition ease-out duration-300 hover:bg-mydark hover:text-mycream bg-mywhite w-8 h-8 px-2 rounded-full text-mydark cursor-pointer">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                    stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="css-i6dzq1">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg>
                            </span>
                        </div>
                        <button
                            class="flex items-center py-2 px-4 rounded-lg text-sm hover:bg-mydark hover:text-mycream bg-mywhite text-mydark shadow-lg">Send
                            <svg class="ml-1" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                            </svg>
                        </button>
                    </footer>
                </form>
                {{-- 1st post --}}
                <div class="bg-mycream shadow rounded-lg mb-6">
                    <div class="flex flex-row px-2 py-3 mx-3">
                        <div class="w-auto h-auto rounded-full">
                            <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer"
                                src="assets/images/moon.jpg" alt="moon">
                        </div>
                        <div class="flex flex-col mb-2 ml-4 mt-1">
                            <div class="text-mydark text-sm font-semibold">Moon</div>
                            <div class="flex w-full mt-1">
                                <div class="text-mydark flex font-light text-xs gap-2">
                                    • 30 seconds ago <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" class="w-4 h-4 text-mygray cursor-pointer hover:fill-mydark">
                                        <path
                                            d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-mydark font-medium text-sm mb-8 mx-3 px-2">
                        Live one day at a time.
                    </div>
                    <div class="w-auto h-auto flex justify-center items-center mx-3">
                        <img class="flex justify-center items-center mx-3 rounded-md w-96 h-96 object-contain"
                            src="assets/images/post.jpg" alt="post">
                    </div>
                    <div class="flex w-auto border-none mx-3">
                        <div class="mt-3 mx-5 flex flex-row text-xs">
                            <div
                                class="flex font-medium rounded-md mb-2 mr-4 items-center cursor-pointer text-mydark hover:text-mygray">
                                6.9m
                                <div class="ml-1 text-mydark hover:text-mygray">
                                    likes
                                </div>
                            </div>
                            <div
                                class="flex font-medium rounded-md mb-2 mr-4 items-center cursor-pointer text-mydark hover:text-mygray">
                                66k
                                <div class="ml-1 cursor-pointer text-mydark hover:text-mygray">
                                    comments
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mx-5 w-full flex justify-end text-xs">
                            <div
                                class="flex font-medium rounded-md mb-2 mr-4 items-center cursor-pointer text-mydark hover:text-mygray">
                                1.6k
                                <div class="ml-1 text-mydark hover:text-mygray">shares</div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-mygray focus-within:text-mygray">
                        <img class="w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer"
                            src="assets/images/moon.jpg" alt="moon">
                        <span class="absolute inset-y-0 right-0 flex items-center pr-6">
                            <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-mydark">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                            </button>
                        </span>
                        <input type="text"
                            class="w-full py-2 pl-4 pr-10 text-sm rounded-2xl bg-mywhite border border-transparent appearance-none rounded-tg placeholder-mygray"
                            placeholder="Write a comment..." autocomplete="off">

                    </div>
                </div>
                {{-- 2nd post --}}
                <div class="bg-mycream shadow rounded-lg mb-6">
                    <div class="flex flex-row px-2 py-3 mx-3">
                        <div class="w-auto h-auto rounded-full">
                            <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer"
                                src="assets/images/moon.jpg" alt="moon">
                        </div>
                        <div class="flex flex-col mb-2 ml-4 mt-1">
                            <div class="text-mydark text-sm font-semibold">Moon</div>
                            <div class="flex w-full mt-1">
                                <div class="text-mydark font-light text-xs">
                                    • 6 hours ago
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-mydark font-medium text-sm mb-8 mx-3 px-2">
                        If you believe, you will receive whatever you ask for in prayer.
                    </div>
                    <div class="mx-3 flex w-auto h-auto justify-center items-center">
                        <img class="rounded-md w-96 h-96 object-contain mx-3" src="assets/images/post1.jpeg"
                            alt="post">
                    </div>
                    <div class="flex w-auto border-none mx-3">
                        <div class="mt-3 mx-5 flex flex-row text-xs">
                            <div class="flex text-mydark font-medium rounded-md mb-2 mr-4 items-center">
                                1k
                                <div class="ml-1 text-mydark text-ms">
                                    likes
                                </div>
                            </div>
                            <div class="flex text-mydark font-medium rounded-md mb-2 mr-4 items-center">
                                69
                                <div class="ml-1 text-mydark text-ms">
                                    comments
                                </div>
                            </div>

                        </div>
                        <div class="mt-3 mx-5 w-full flex justify-end text-xs">
                            <div class="flex text-mydark font-medium rounded-md mb-2 mr-4 items-center">666<div
                                    class="ml-1 text-mydark  text-ms">shares</div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-mygray focus-within:text-mygray">
                        <img class="w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer"
                            src="assets/images/moon.jpg" alt="moon">
                        <span class="absolute inset-y-0 right-0 flex items-center pr-6">
                            <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-mydark">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                            </button>
                        </span>
                        <input type="text"
                            class="w-full py-2 pl-4 pr-10 text-sm rounded-2xl bg-mywhite border border-transparent appearance-none rounded-tg placeholder-mygray"
                            placeholder="Write a comment..." autocomplete="off">
                    </div>
                </div>

    {{-- 3rd post --}}
    <div class="bg-mycream shadow rounded-lg mb-6">
        <div class="flex flex-row px-2 py-3 mx-3">
            <div class="w-auto h-auto rounded-full">
                <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer" src="assets/images/moon.jpg"
                    alt="moon">
            </div>
            <div class="flex flex-col mb-2 ml-4 mt-1">
                <div class="text-mydark text-sm font-semibold">Moon</div>
                <div class="flex w-full mt-1">
                    <div class="text-mydark font-light text-xs">
                        • 6 minutes ago
                    </div>
                </div>
            </div>
        </div>


        <div class="text-mydark font-medium text-sm mb-8 mx-3 px-2">
            I have put my hope in your word.
        </div>

        <div class="flex w-auto border-none mx-3">
            <div class="mt-3 mx-5 flex flex-row text-xs">
                <div class="flex text-mydark font-medium rounded-md mb-2 mr-4 items-center">
                    2.3m
                    <div class="ml-1 text-mydark text-ms">
                        likes
                    </div>
                </div>
                <div class="flex text-mydark font-medium rounded-md mb-2 mr-4 items-center">
                    12k
                    <div class="ml-1 text-mydark text-ms">
                        comments
                    </div>
                </div>

            </div>
            <div class="mt-3 mx-5 w-full flex justify-end text-xs">
                <div class="flex text-mydark font-medium rounded-md mb-2 mr-4 items-center">5.2k<div
                        class="ml-1 text-mydark  text-ms">shares</div>
                </div>
            </div>
        </div>

        <div
        class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-mygray focus-within:text-mygray">
        <img class="w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer"
            src="assets/images/moon.jpg" alt="moon">
        <span class="absolute inset-y-0 right-0 flex items-center pr-6">
            <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-mydark">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>
            </button>
        </span>
        <input type="text"
            class="w-full py-2 pl-4 pr-10 text-sm rounded-2xl bg-mywhite border border-transparent appearance-none rounded-tg placeholder-mygray"
            placeholder="Write a comment..." autocomplete="off">
    </div>
    </div>

    </section>

    </main>
    </div>
@endsection
