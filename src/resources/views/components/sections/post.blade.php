@php
    $showInteraction = $showInteraction ?? true;
    $showTimerAndEdit = $showTimerAndEdit ?? true;
@endphp

<div class="bg-mycream rounded-lg mb-6">

    <div class="w-auto m-3 py-2 hover:shadow-lg rounded-lg">

        @if($postsMediumOrShare instanceof App\Models\PostShare)
            <div class="flex flex-row px-2 pb-2 pt-4 mx-3 w-auto">
                <x-profile-icon.small />
                <div class="flex flex-col mb-2 ml-4 mt-1">
                    <div class="text-mydark text-sm font-semibold cursor-pointer">
                        {{ $postsMediumOrShare->user->username }}
                    </div>
                    @if($showTimerAndEdit)
                    <div class="flex w-full mt-1">
                        <div class="text-mydark flex font-light text-xs gap-2">
                            {{ $postsMediumOrShare->created_at->diffForHumans() }}
                        </div>
                        <x-svgs.edit-icon />
                    </div>
                    @endif
                </div>
            </div>

            <div class="text-mydark font-medium text-sm m-3 hover:drop-shadow-md">
                {{ $postsMediumOrShare->repost_content }}
            </div>

            <div class="flex flex-row px-2 pb-2 pt-4 mx-3 w-auto">
                <x-profile-icon.small />
                <div class="flex flex-col mb-2 ml-4 mt-1">
                    <div class="text-mydark text-sm font-semibold cursor-pointer">
                        {{ $postsMediumOrShare->post->user->username }}
                    </div>
                    @if($showTimerAndEdit)
                    <div class="flex w-full mt-1">
                        <div class="text-mydark flex font-light text-xs gap-2">
                            {{ $postsMediumOrShare['post']->created_at->diffForHumans() }}
                        </div>
                        <x-svgs.edit-icon />
                    </div>
                    @endif
                </div>
            </div>

            <div class="text-mydark font-medium text-sm m-3 hover:drop-shadow-md">
                @if (!empty($postsMediumOrShare['post']) && !empty($postsMediumOrShare['post']->content))
                {{ $postsMediumOrShare['post']->content }}
                @endif
            </div>

            <div class="w-auto h-auto flex justify-center items-center m-3 pb-4">
                @if (!empty($postsMediumOrShare->post->postMedia))
                <img class="flex justify-center items-center mx-3 rounded-md w-96 h-96 object-contain"
                src="{{ asset($postsMediumOrShare->post->postMedia->image) }}" alt="post image">
                @endif
            </div>

        @else

            <div class="flex flex-row px-2 pb-2 pt-4 mx-3 w-auto">
                <x-profile-icon.small />
                <div class="flex flex-col mb-2 ml-4 mt-1">
                    <div class="text-mydark text-sm font-semibold cursor-pointer">
                        {{ $postsMediumOrShare['post']->user->username }}
                    </div>
                    @if($showTimerAndEdit)
                    <div class="flex w-full mt-1">
                        <div class="text-mydark flex font-light text-xs gap-2">
                            {{ $postsMediumOrShare['post']->created_at->diffForHumans() }}
                        </div>
                        <x-svgs.edit-icon />
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
        <div class="mt-1 mx-3 flex flex-row text-xs hover:drop-shadow-md transition-all">
            <div
                class="flex font-medium rounded-md mb-2 mr-4 items-center cursor-pointer text-mydark hover:text-mygray hover:drop-shadow-md">
                6.9m
                <div class="ml-1 text-mydark hover:text-mygray hover:drop-shadow-md">
                    likes
                </div>
            </div>
            <div
                class="flex font-medium rounded-md mb-2 mr-4 items-center cursor-pointer text-mydark hover:text-mygray hover:drop-shadow-md">
                66k
                <div class="ml-1 cursor-pointer text-mydark hover:text-mygray hover:drop-shadow-md">
                    comments
                </div>
            </div>
            <div
                class="flex font-medium rounded-md mb-2 mr-4 items-center cursor-pointer text-mydark hover:text-mygray hover:drop-shadow-md">
                4k
                <div class="ml-1 cursor-pointer text-mydark hover:text-mygray hover:drop-shadow-md">
                    shares
                </div>
            </div>
        </div>
    </div>

    @if($showInteraction)
    <hr class="border shadow-lg border-solid border-opacity-20 border-mygray">
    <x-buttons.interaction :postsMediumOrShare="$postsMediumOrShare"/>
    @endif

</div>
