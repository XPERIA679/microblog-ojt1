@extends('layouts.app')

@section('title', $user ? $user->username : 'User Not Found')

@section('content')

@extends('layouts.navbar')

@php
    $userPosts = [];
    if (auth()->user()->followings->pluck('id')->contains($user->id)) 
    {
        $userPosts = $user->userPost->map(function ($post) {
            $postMedia = $post->postMedia()->first();
            return ['post' => $post, 'postMedium' => $postMedia];
        });
        $userPosts = $userPosts->merge($user->postShare);
        $userPosts = $userPosts->sortByDesc(function ($item) {
        if ($item instanceof App\Models\PostShare) {
                return $item->updated_at;
            }
            return $item['post']->updated_at;
        });
    }
@endphp

    <div class="bg-mycream bg-opacity-0 relative w-full h-full justify-center items-center transition-opacity duration-500">
        <main class="grid lg:grid-cols-3 gap-6 my-12 mx-12 w-2xl p-10 justify-center relative">
            <x-modals.follower :user="$user"/>
            <x-modals.following :user="$user"/>
            <x-modals.edit-profile />
            <section class="lg:col-span-1 px-6 lg:sticky top-20 self-start my-4 overflow-hidden">
                <div class="rounded-lg p-10 bg-mydark">
                    <x-profile-icon.big :user="$user"/>
                    <div class="flex justify-center items-center gap-6 my-5">
                        <x-counter.post :user="$user"/>
                        <x-counter.follower :user="$user"/>
                        <x-counter.following :user="$user"/>
                    </div>
                    <div class="flex justify-center items-center">
                        @if (auth()->user()->id != $user->id)
                        @php
                            $isFollowing = auth()->user()->followings->contains($user);
                        @endphp
                        <form action="{{ route($isFollowing ? 'relationship.unfollow' : 'relationship.follow') }}" method="POST">
                            @csrf
                            @if($isFollowing)
                                @method('DELETE')
                            @endif
                            <input name="{{ $isFollowing ? 'userToUnfollowId' : 'userToFollowId' }}" value="{{ $user->id }}" hidden>
                            <button onclick="preventButtonMashing(this)" class="flex items-center justify-center text-center text-xs font-semibold bg-mycream text-mydark hover:bg-mygray hover:text-mycream p-3 rounded-full transition-all">
                                <x-svgs.follow-icon />
                                {{ $isFollowing ? 'Unfollow' : 'Follow' }}
                            </button>
                        </form>
                        @else
                        <div class="flex justify-center items-center">
                            <x-buttons.edit-profile />
                        </div>
                        @endif
                    </div>
                </div>
                @if($user->id === auth()->user()->id)
                    <x-sections.follow-suggestions />
                @endif
            </section>
            <section class="lg:col-span-2 mt-4">
                <x-notifications.notification-message />
                @if($user->id === auth()->user()->id)
                    <x-forms.create-post />
                @endif
                @forelse ($userPosts as $userPost)
                    <x-modals.edit-post :postsMediumOrShare="$userPost"/>
                    <x-modals.create-comment-modal :postsMediumOrShare="$userPost" />
                    <x-modals.share-post :postsMediumOrShare="$userPost"/>
                    <x-sections.post :postsMediumOrShare="$userPost"/>
                @empty
                    @if($user->id === auth()->user()->id)
                        <div class="flex justify-center items-center h-5/6 text-2xl text-mywhite">
                            No posts to display. Why not create your first post now?
                        </div>
                    @else
                        <div class="flex justify-center items-center h-5/6 text-2xl text-mywhite">
                            You need to follow the user first to view the posts.
                        </div>
                    @endif
                @endforelse
            </section>
        </main>
    </div>

@endsection
