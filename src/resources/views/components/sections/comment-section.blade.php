<div id="comment" class="w-auto h-auto rounded-lg">
    <div class="rounded p-16 bg-mycream h-96 overflow-scroll overflow-x-hidden">
    @foreach ($postsMediumOrShare['post']->postComment as $comment)
        <div class="flex flex-row w-auto mt-4">
            <x-profile-icon.small />
            <div class="flex flex-col bg-mywhite rounded-2xl overflow-hidden hover:shadow-lg">
                <div class="flex text-sm font-bold justify-start items-start mt-1 ml-3">
                    {{ $comment->user->username }}
                </div>
                <div class="flex text-sm font-medium p-2 w-60 h-auto justify-start items-start ml-1">
                    {{ $comment->content }}
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <x-forms.create-comment-form :postsMediumOrShare="$postsMediumOrShare"/>
</div>
