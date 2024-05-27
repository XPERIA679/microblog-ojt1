@extends('layouts.app')

@section('title', 'Microblog')

@section('content')

@extends('layouts.navbar')

    <div class="bg-mycream bg-opacity-0 relative w-full h-full justify-center items-center transition-opacity duration-500">
        <main class="grid lg:grid-cols-3 gap-6 my-12 mx-12 w-2xl p-10 justify-center relative">
            <x-feeds.edit-post />
            <x-feeds.edit-profile />
            <section class="lg:col-span-1 px-6">
                {{-- User Profile --}}
                <div class="rounded-lg p-10 bg-mydark">
                    <x-feeds.user-profile />
                    <div class="flex justify-center items-center gap-6 my-5">
                        <x-feeds.post-count />
                        <x-feeds.follower-count />
                        <x-feeds.following-count />
                    </div>
                    <div class="flex justify-center items-center">
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
                    <x-feeds.post-profile-icon />
                    <x-feeds.post />
                    <x-feeds.interactions-count />
                </div>
                <hr class="border shadow-lg border-solid border-opacity-20 border-mygray">
                {{-- Post Interactions --}}
                <x-feeds.post-interaction />
            </section>
        </main>
    </div>

@endsection
