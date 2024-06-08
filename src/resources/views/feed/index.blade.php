@extends('layouts.app')

@section('title', 'Microblog')

@section('content')

@extends('layouts.navbar')

    <div class="bg-mycream bg-opacity-0 relative w-full h-full justify-center items-center transition-opacity duration-500">
        <main class="grid lg:grid-cols-3 gap-6 my-12 mx-12 w-2xl p-10 justify-center relative">
            <x-modals.edit-profile />
            <x-modals.follower />
            <x-modals.following />

            <section class="lg:col-span-1 px-6 sticky top-0 self-start overflow-hidden">
                <div class="rounded-lg p-10 bg-mydark mt-8">
                    <x-profile-icon.big :user="auth()->user()"/>
                    <div class="flex justify-center items-center gap-6 my-5">
                        <x-counter.post :user="auth()->user()"/>
                        <x-counter.follower :user="auth()->user()"/>
                        <x-counter.following :user="auth()->user()"/>
                    </div>
                    <div class="flex justify-center items-center">
                        <x-buttons.edit-profile />
                    </div>
                </div>
                <x-sections.follow-suggestions />
            </section>
            <section class="lg:col-span-2 mt-8">
                <x-forms.create-post />
                @foreach ($postsMediaAndShares as $postsMediumOrShare)
                <x-modals.create-comment-modal :postsMediumOrShare="$postsMediumOrShare"/>
                <x-modals.edit-post />
                <x-modals.share-post :postsMediumOrShare="$postsMediumOrShare"/>
                <x-sections.post :postsMediumOrShare="$postsMediumOrShare"/>
                @endforeach
            </section>
        </main>
    </div>

@endsection
