@extends('layouts.app')

@section('title', 'My Thoughts')

@section('content')

@php
    $userPosts = $user->userPost->map(function ($post) {
        $postMedia = $post->postMedia()->first();
        return ['post' => $post, $postMedia];
    });
    $userPosts = $userPosts->merge($user->postShare);
@endphp

    <div class="bg-mycream bg-opacity-0 relative w-full h-full justify-center items-center transition-opacity duration-500">
        <main class="grid lg:grid-cols-3 gap-6 my-12 mx-12 w-2xl p-10 justify-center relative">
            <x-modals.edit-profile />
            <section class="lg:col-span-1 px-6">
                <div class="rounded-lg p-10 bg-mydark">
                    <x-profile-icon.big :user="$user"/>
                    <div class="flex justify-center items-center gap-6 my-5">
                        <x-counter.post :user="$user"/>
                        <x-counter.follower :user="$user"/>
                        <x-counter.following :user="$user"/>
                    </div>
                    <div class="flex justify-center items-center">
                    @if(!auth()->user()->followedUsers->contains($user))
                        <form action="{{ route('relationship.follow') }}" method="POST">
                            @csrf
                            <input name="userToFollowId" value ="{{ $user->id }}" hidden>
                            <button
                                class="flex items-center justify-center text-center text-xs font-semibold bg-mycream text-mydark hover:bg-mygray hover:text-mycream p-3 rounded-full transition-all">
                                <x-svgs.follow-icon />
                                Follow
                            </button>
                        </form>
                    @endif 
                    </div>
                </div>
                @if($user->id === auth()->user()->id)
                    <x-sections.follow-suggestions />
                @endif
            </section>
            <section class="lg:col-span-2 ">
                @if($user->id === auth()->user()->id)
                    <x-forms.create-post />
                @endif
                @foreach ($userPosts as $userPost)
                    <x-modals.edit-post />
                    <x-modals.share-post :postsMediumOrShare="$userPost"/>
                    <x-sections.post :postsMediumOrShare="$userPost"/>
                @endforeach
            </section>
        </main>
    </div>

@endsection
