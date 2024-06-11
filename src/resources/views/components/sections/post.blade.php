@php
    $showInteraction = $showInteraction ?? true;
    $showTimerAndEdit = $showTimerAndEdit ?? true;
@endphp

<div class="bg-mycream rounded-lg mb-6">

    <div class="w-auto m-3 py-2">
        @if ($postsMediumOrShare instanceof App\Models\PostShare)
            <div class="w-auto m-3">
                <div class="flex flex-row p-2 mx-1 w-auto">
                    <x-profile-icon.small :user="$postsMediumOrShare->user" />
                    <div class="flex flex-col mb-2 ml-4 mt-1">
                        <div class="text-mydark text-sm font-semibold cursor-pointer">
                            <form action="{{ route('profile.show.profile.page') }}" method="GET">
                                <input name="userId" value="{{ $postsMediumOrShare->user->id }}" hidden>
                                <button class="font-semibold text-mydark cursor-pointer">
                                    {{ $postsMediumOrShare->user->username }}
                                </button>
                            </form>
                        </div>
                        @if ($showTimerAndEdit)
                            <div class="flex w-full mt-1">
                                <div class="text-mydark flex font-light text-xs gap-2">
                                    {{ $postsMediumOrShare->created_at->diffForHumans() }}
                                </div>
                                <ul class="absolute right-16">
                                    <li class="relative">
                                        <div id="menu-btn" class="size-6 text-bold text-mydark hover:text-mygray cursor-pointer transition-all mx-5">
                                            •••
                                        </div>

                                        <div id="dropdown-post"
                                            class="dropdown-post hidden absolute right-0 mt-1 mr-2 w-24 bg-mywhite rounded-xl shadow-lg z-10 text-center">
                                            <ul>
                                                <li onclick="showPost()" id="postedit"
                                                    class="p-0.5 flex items-center justify-center h-8 text-mydark text-xs bg-mywhite hover:bg-mydark hover:text-mycream cursor-pointer rounded-md">
                                                    Edit Post</li>
                                                <li class="p-0.5 flex items-center justify-center h-8 text-mydark text-xs bg-mywhite hover:bg-mydark hover:text-mycream cursor-pointer rounded-md"
                                                    id="delete-btn">Delete Post</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="text-mydark font-medium text-sm m-3 hover:drop-shadow-md">
                    {{ $postsMediumOrShare->repost_content }}
                </div>
            </div>


            <div class="w-auto m-3 py-2 hover:shadow-lg rounded-lg border-2 border-opacity-20 border-mygray">
                @if (!empty($postsMediumOrShare->post))
                    <div class="flex flex-row p-2 mx-3 w-auto border-mygray">
                        <x-profile-icon.small :user="$postsMediumOrShare->post->user" />
                        <div class="flex flex-col mb-2 ml-4 mt-1">
                            <div class="text-mydark text-sm font-semibold cursor-pointer">
                                <form action="{{ route('profile.show.profile.page') }}" method="GET">
                                    <input name="userId" value="{{ $postsMediumOrShare->post->user->id }}" hidden>
                                    <button class="font-semibold text-mydark cursor-pointer">
                                        {{ $postsMediumOrShare->post->user->username }}
                                    </button>
                                </form>
                            </div>
                            @if ($showTimerAndEdit)
                                <div class="flex w-full mt-1">
                                    <div class="text-mydark flex font-light text-xs gap-2">
                                        @if (!empty($postsMediumOrShare->post))
                                            {{ $postsMediumOrShare->post->created_at->diffForHumans() }}
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>


                    <div class="text-mydark font-medium text-sm m-3 hover:drop-shadow-md">
                        {{ $postsMediumOrShare->post->content }}
                    </div>


                    @if (!empty($postsMediumOrShare->post->postMedia))
                        <div class="w-auto h-auto flex justify-center items-center m-3 pb-4">
                            <img class="flex justify-center items-center mx-3 rounded-md w-96 h-96 object-contain"
                                src="{{ asset($postsMediumOrShare->post->postMedia->image) }}" alt="post image">
                        </div>
                    @endif
                @else
                    <div class="text-mydark font-medium text-sm m-3 hover:drop-shadow-md">
                        Content is not available.
                    </div>
                @endif
            </div>
        @else
            <div class="flex flex-row p-2 mx-3 w-auto">
                <x-profile-icon.small :user="$postsMediumOrShare['post']->user" />
                <div class="flex flex-col mb-2 ml-4 mt-1">
                    <div class="text-mydark text-sm font-semibold cursor-pointer">
                        <form action="{{ route('profile.show.profile.page') }}" method="GET">
                            <input name="userId" value="{{ $postsMediumOrShare['post']->user->id }}" hidden>
                            <button class="font-semibold text-mydark cursor-pointer">
                                {{ $postsMediumOrShare['post']->user->username }}
                            </button>
                        </form>
                    </div>
                    @if ($showTimerAndEdit)
                        <div class="flex w-full mt-1">
                            <div class="text-mydark flex font-light text-xs gap-2">
                                {{ $postsMediumOrShare['post']->created_at->diffForHumans() }}
                            </div>
                            <ul class="absolute right-16">
                                <li class="relative">
                                    <div id="menu-btn" class="size-6 text-bold text-mydark hover:text-mygray cursor-pointer transition-all mx-5">
                                        •••
                                    </div>

                                    <div id="dropdown-post"
                                        class="dropdown-post hidden absolute right-0 mt-1 mr-2 w-24 bg-mywhite rounded-xl shadow-lg z-10 text-center">
                                        <ul>
                                            <li onclick="showPost()" id="postedit"
                                                class="p-0.5 flex items-center justify-center h-8 text-mydark text-xs bg-mywhite hover:bg-mydark hover:text-mycream cursor-pointer rounded-md">
                                                Edit Post</li>
                                            <li class="p-0.5 flex items-center justify-center h-8 text-mydark text-xs bg-mywhite hover:bg-mydark hover:text-mycream cursor-pointer rounded-md"
                                                id="delete-btn">Delete Post</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>

            <div class="text-mydark font-medium text-sm m-3 hover:drop-shadow-md">
                @if (!empty($postsMediumOrShare['post']) && !empty($postsMediumOrShare['post']->content))
                    {{ $postsMediumOrShare['post']->content }}
                @endif
            </div>

            @if (!empty($postsMediumOrShare['postMedium']) && !empty($postsMediumOrShare['postMedium']->image))
                <div class="w-auto h-auto flex justify-center items-center m-3 pb-4">
                    <img class="flex justify-center items-center mx-3 rounded-md w-96 h-96 object-contain"
                        src="{{ asset($postsMediumOrShare['postMedium']->image) }}" alt="post image">
                </div>
            @endif

        @endif
    </div>

    <div class="w-auto border-none mx-3">
        <x-counter.interaction-counter :postsMediumOrShare="$postsMediumOrShare" />
    </div>

    @if ($showInteraction)
        <hr class="border shadow-lg border-solid border-opacity-20 border-mygray">
        <x-buttons.interaction :postsMediumOrShare="$postsMediumOrShare" />
    @endif

</div>
