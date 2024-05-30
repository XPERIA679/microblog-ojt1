@extends('layouts.app')

@section('title', 'Microblog')

@section('content')

    <div class="bg-mycream bg-opacity-0 relative w-full h-full justify-center items-center transition-opacity duration-500">
        <main class="grid lg:grid-cols-3 gap-6 my-12 mx-12 w-2xl p-10 justify-center relative">
            {{-- Modal for editing post --}}
            <x-feeds.edit-post />
            {{-- Modal for editing profile data --}}
            <x-feeds.edit-profile />
            {{-- Modal for commenting on post --}}
            <x-feeds.create-comment />
            {{-- Modal for post sharing --}}
            <x-feeds.share-post />
            <section class="lg:col-span-1 px-6">
                {{-- User Profile --}}
                <div class="rounded-lg p-10 bg-mydark">
                    <x-feeds.user-profile />
                    <div class="flex justify-center items-center gap-6 my-5">
                        {{-- Total user post/s --}}
                        <x-feeds.post-count />
                        {{-- Total user follower/s --}}
                        <x-feeds.follower-count />
                        {{-- Total user following/s --}}
                        <x-feeds.following-count />
                    </div>
                    <div class="flex justify-center items-center">
                        {{-- Button on editing profile --}}
                        <x-feeds.edit-profile-btn />
                    </div>
                </div>

                {{-- User Account to follow Suggestions --}}
                <x-feeds.follow-suggestions />

            </section>

            <section class="lg:col-span-2 ">
                {{-- Post Creation --}}
                <x-feeds.create-post />
                {{-- Posts --}}
                <div class="bg-mycream rounded-lg mb-6">
                    {{-- User post profile icon and post/s time --}}
                    <x-feeds.post-profile-icon />
                    {{-- User post/s content --}}
                    <x-feeds.post />
                    {{-- w --}}
                    <x-feeds.interactions-count />
                    <hr class="border shadow-lg border-solid border-opacity-20 border-mygray">
                    {{-- Post Interactions --}}
                    <x-feeds.post-interaction />
                </div>
            </section>
        </main>
    </div>
@endsection
