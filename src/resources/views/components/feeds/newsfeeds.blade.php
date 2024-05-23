@extends('layouts.app')

@section('title', 'Microblog')

@section('content')


    <div class="bg-mycream bg-opacity-0 relative w-full h-full justify-center items-center transition-opacity duration-500">
        <main class="grid lg:grid-cols-3 gap-6 my-12 mx-12 w-2xl p-10 justify-center relative">
            <x-feeds.edit-profile />
            <section class="lg:col-span-1">
                {{-- User Profile --}}
                <div class="shadow rounded-lg p-10 bg-mydark">
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
            </section>

            <section class="lg:col-span-2">
                {{-- Post Creation --}}
                <x-feeds.create-post />
                {{-- Posts --}}
                <div class="bg-mycream shadow rounded-lg mb-6">
                    <x-feeds.profile-icon />
                    <hr class="w-auto h-0.5 bg-mygray border-solid md:my-2">
                    <x-feeds.post />
                    <hr class="w-auto h-0.5 bg-mygray border-solid md:my-2">
                    <x-feeds.interactions-count />
                </div>
                {{-- Comment Creation --}}

                <x-feeds.create-comment />
            </section>
        </main>
    </div>
@endsection
