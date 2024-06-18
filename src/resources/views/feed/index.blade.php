@extends('layouts.app')

@section('title', 'Microblog')

@section('content')

    @extends('layouts.navbar')

    <div class="bg-mycream bg-opacity-0 relative w-full h-full justify-center items-center transition-opacity duration-500">
        <main class="grid lg:grid-cols-3 gap-6 mx-12 w-2xl p-10 justify-center relative">
            <x-modals.edit-profile />
            <x-modals.follower :user="auth()->user()" />
            <x-modals.following :user="auth()->user()" />
            <x-modals.delete-post />

            <section class="mt-8 lg:col-span-1 px-6 lg:sticky top-12 self-start overflow-hidden">
                <div class="rounded-lg p-10 bg-mydark mt-8">
                    <x-profile-icon.big :user="auth()->user()" />
                    <div class="flex justify-center items-center gap-6 my-5">
                        <x-counter.post :user="auth()->user()" />
                        <x-counter.follower :user="auth()->user()" />
                        <x-counter.following :user="auth()->user()" />
                    </div>
                    <div class="flex justify-center items-center">
                        <x-buttons.edit-profile />
                    </div>
                </div>
                <x-sections.follow-suggestions />
            </section>
            <section class="lg:col-span-2 mt-16">
                <x-notifications.notification-message />
                <x-forms.create-post />
                @forelse ($postsMediaAndShares as $postsMediumOrShare)
                    <x-modals.create-comment-modal :postsMediumOrShare="$postsMediumOrShare" />
                    <x-modals.edit-post :postsMediumOrShare="$postsMediumOrShare" />
                    <x-modals.share-post :postsMediumOrShare="$postsMediumOrShare" />
                    <x-sections.post :postsMediumOrShare="$postsMediumOrShare" />
                @empty
                    <div class="flex justify-center items-center h-5/6 text-xl text-mywhite">
                        Nothing to see here! Start exploring by creating your own post or following other users.
                    </div>
                @endforelse
            </section>
        </main>
    <div class="mt-px">
        {{ $postsMediaAndShares->links('vendor.pagination.feed') }}
    </div>
    </div>

@endsection
