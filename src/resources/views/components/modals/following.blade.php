<div onclick="hidefollowingModal()" id="followingModal"
    class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500 z-50">
    <div onclick="event.stopImmediatePropagation()"
        class="bg-mycream rounded-lg shadow-md p-10 flex justify-center items-center">
        <div id="followingModal" class="bg-mycream mx-auto overflow-hidden transition-opacity duration-500">
            <div class="text-mydark font-bold text-center w-full mb-2">
                <h1>Followed Users</h1>
            </div>

            <div class="rounded-lg my-2 p-6 bg-mycream h-96 overflow-scroll overflow-x-hidden">
                @forelse ($user->followings as $followedUser)
                    <div class="flex flex-row items-center p-2 w-auto">

                        <div class="w-auto h-auto rounded-full ml-3">
                            <x-profile-icon.small :user="$followedUser"/>
                        </div>

                        <div class="flex flex-col my-2 ml-4 pr-4">
                            <div class="text-mydark text-sm font-semibold cursor-pointer">
                                <form action="{{ route('profile.show.profile.page') }}" method="GET">
                                    <input name="userId" value="{{$followedUser->id}}" hidden>
                                    <button onclick="preventButtonMashing(this)" class="font-semibold text-mydark cursor-pointer">
                                        {{ $followedUser->username }}
                                    </button>
                                </form>
                                <div class="text-mydark flex font-light text-xs">
                                    {{ $followedUser->followers->count() . '  Followers' }}
                                </div>
                            </div>
                        </div>

                        <div class="ml-auto">
                            <form action="{{ route('relationship.unfollow') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input name="userToUnfollowId" value="{{ $followedUser->id }}" hidden>
                                <button onclick="preventButtonMashing(this)" class="flex items-center justify-center text-xs font-semibold bg-mydark text-mywhite hover:bg-mydark hover:text-mycream p-2 rounded-full transition-all">
                                    Unfollow
                                </button>
                            </form>
                        </div>

                    </div>
                @empty
                    <div class="text-mydark text-sm font-semibold cursor-pointer">
                        No followed users found.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
