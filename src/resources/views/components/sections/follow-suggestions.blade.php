@php
    $authUserId = auth()->user()->id;
    $unfollowedUsers = 
        App\Models\User::whereKeyNot($authUserId)
        ->whereNotIn('id', auth()->user()->followedUsers->pluck('following_id'))
        ->take(3)
        ->get();
@endphp

<div class="rounded-lg my-5 p-6 bg-mydark h-96 overflow-scroll overflow-x-hidden">
    @foreach($unfollowedUsers as $unfollowedUser)
    <div class="flex flex-row px-2 pb-2 pt-4 my-3 w-auto">
        <x-profile-icon.small :user="$unfollowedUser"/>
        <div class="flex flex-col my-2 ml-4 pr-12">
            <div class="text-mycream text-sm font-semibold cursor-pointer">
                <form action="{{ route('profile.show.profile.page') }}" method="GET">
                    <input name="userId" value="{{$unfollowedUser->id}}" hidden>
                    <button class="font-semibold text-mywhite cursor-pointer">
                        {{ $unfollowedUser->username }}
                    </button>
                </form>
            </div>
            <div class="text-mywhite flex font-light text-xs">
                {{ $unfollowedUser->followers()->count() }} Followers
            </div>
        </div>
        <div class="flex flex-col my-2 ml-10">
            <form action="{{ route('relationship.follow') }}" method="POST">
                @csrf
                <input name="userToFollowId" value ="{{ $unfollowedUser->id }}" hidden>
                <button
                    class="flex items-center justify-center text-center text-xs font-semibold bg-mycream text-mydark hover:bg-mygray hover:text-mycream p-3 rounded-full transition-all">
                    <x-svgs.follow-icon />
                    Follow
                </button>
            </form>
        </div>
    </div>
    @endforeach
</div>
