@extends('layouts.app')

@section('title', 'Microblog')

@section('content')

    <div class="bg-mycream bg-opacity-0 relative w-full h-full justify-center items-center transition-opacity duration-500">
        <main class="grid lg:grid-cols-3 gap-6 my-12 mx-12 w-2xl p-10 justify-center relative">
            {{-- Modal for editing post --}}
            <x-modals.edit-post />
            {{-- Modal for editing profile data --}}
            <x-modals.edit-profile />
            {{-- Modal for commenting on post --}}
            <x-modals.create-comment />
            {{-- Modal for post sharing --}}
            <x-modals.share-post />
            <section class="lg:col-span-1 px-6">
                {{-- User Profile --}}
                <div class="rounded-lg p-10 bg-mydark">
                    <x-profile-icon.big />
                    <div class="flex justify-center items-center gap-6 my-5">
                        {{-- Total user post/s --}}
                        <x-counter.post />
                        {{-- Total user follower/s --}}
                        <x-counter.follower />
                        {{-- Total user following/s --}}
                        <x-counter.following />
                    </div>
                    <div class="flex justify-center items-center">
                        {{-- Button on editing profile --}}
                        <x-buttons.edit-profile />
                    </div>
                </div>

                {{-- User Account to follow Suggestions --}}
                <x-sections.follow-suggestions />

            </section>

            <section class="lg:col-span-2 ">
                {{-- Post Creation --}}
                <x-forms.create-post />
                {{-- Posts --}}
                <x-sections.post />
            </section>
        </main>
    </div>
@endsection
