@php
    $authUserId = auth()->user()->id;
    $unfollowedUsers = 
        App\Models\User::whereKeyNot($authUserId)
        ->whereNotIn('id', auth()->user()->followedUsers->pluck('following_id'))
        ->get();
@endphp

<div class="rounded-lg my-5 p-6 bg-mydark h-96 overflow-scroll overflow-x-hidden">
    @foreach($unfollowedUsers as $unfollowedUser)
    <div class="flex flex-row px-2 pb-2 pt-4 my-3 w-auto">
        <x-profile-icon.small />
        <div class="flex flex-col my-2 ml-4 pr-12">
            <div class="text-mycream text-sm font-semibold cursor-pointer">
                {{$unfollowedUser->username}}
            </div>
            <div class="text-mywhite flex font-light text-xs">
                33k followers
            </div>
        </div>
        <div class="flex flex-col my-2 ml-10">
            <button
                class="flex items-center justify-center text-center text-xs font-semibold bg-mycream text-mydark hover:bg-mygray hover:text-mycream p-3 rounded-full transition-all">
                <x-svgs.follow-icon />
                Follow
            </button>
        </div>
    </div>
    @endforeach
</div>
