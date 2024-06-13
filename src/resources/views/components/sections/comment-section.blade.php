@php
    $post = $postsMediumOrShare instanceof App\Models\PostShare ? $postsMediumOrShare : $postsMediumOrShare['post'];
@endphp
<div id="comment" class="w-auto h-auto rounded-lg">
    <div class="rounded p-16 bg-mycream h-96 overflow-scroll overflow-x-hidden">
        @foreach ($post->postComment as $comment)
            <div class="flex flex-row w-auto mt-4">
                <x-profile-icon.small :user="$comment->user" />
                <div class="flex flex-col bg-mywhite rounded-2xl overflow-hidden hover:shadow-lg">
                    <div class="flex text-sm font-bold justify-start items-start mt-1 ml-3">
                        {{ $comment->user->username }}
                        <div class="flex ml-16">
                            @if (auth()->id() == $comment->user_id)
                                <button class="text-mygray text-sm hover:text-mydark font-medium transition-all ml-4 mr-2"
                                    onclick="editComment({{ $comment->id }}, '{{ $comment->content }}')">Edit</button>
                                <form action="{{ route('postComment.delete') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="postCommentToDeleteId" value="{{ $comment->id }}">
                                    <button href="submit"
                                        class="text-mygray text-sm hover:text-mydark font-medium transition-all">Delete</button>
                                </form>
                            @endif
                        </div>
                    </div>
                    <div class="flex text-sm font-medium p-2 w-60 h-auto justify-start items-start ml-1">
                        {{ $comment->content }}
                    </div>
                </div>
                <x-modals.edit-comment />
            </div>
        @endforeach
    </div>
    <x-forms.create-comment-form :postsMediumOrShare="$postsMediumOrShare" />
</div>
