<div onclick="hidefollowerModal()" id="followerModal"
    class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500 z-50">
    <div onclick="event.stopImmediatePropagation()"
        class="bg-mycream rounded-lg shadow-md p-10 flex justify-center items-center">
        <div id="followerModal" class="bg-mycream mx-auto overflow-hidden transition-opacity duration-500">
            <div class="text-mydark font-bold text-center w-full mb-2">
                <h1>Followers</h1>
            </div>

            <div class="rounded-lg my-2 p-6 bg-mycream h-96 overflow-scroll overflow-x-hidden">
                @forelse ($user->followers as $follower)
                    <div class="flex flex-row p-2 w-auto">

                        <div class="w-auto h-auto rounded-full ml-3">
                            <x-profile-icon.small :user="$follower"/>
                        </div>
                        
                        <div class="flex flex-col my-2 ml-4 pr-12">
                            <div class="text-mydark text-sm font-semibold cursor-pointer">
                                <form action="{{ route('profile.show.profile.page') }}" method="GET">
                                    <input name="userId" value="{{$follower->id}}" hidden>
                                    <button class="font-semibold text-mydark cursor-pointer">
                                            {{ $follower->username }}
                                    </button>
                                </form>
                            </div>
                            <div class="text-mydark flex font-light text-xs">
                                {{ $user->followers->count() . ' Followers' }}
                            </div>
                        </div>
                        
                        <div class="flex flex-col my-2 ml-10">
                            @if(auth()->id() != $follower->id)
                                <form action="{{ auth()->user()->followedUsers->contains($follower) ? route('relationship.unfollow') : route('relationship.follow') }}" method="POST">
                                    @csrf
                                    @if(auth()->user()->followedUsers->contains($follower))
                                        @method('DELETE')
                                    @endif
                                    <input name="{{ auth()->user()->followedUsers->contains($follower) ? 'userToUnfollowId' : 'userToFollowId' }}" value="{{ $user->id }}" hidden>
                                    <button class="flex items-center justify-center text-center text-xs font-semibold bg-mycream text-mydark hover:bg-mygray hover:text-mycream p-3 rounded-full transition-all">
                                        <x-svgs.follow-icon />
                                        {{ auth()->user()->followedUsers->contains($follower) ? 'Unfollow' : 'Follow' }}
                                    </button>
                                </form>
                            @endif  
                        </div>

                    </div>
                @empty
                    <div class="text-mydark text-sm font-semibold cursor-pointer">
                        No followers found.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
