@php
    use App\Models\PostShare;

    $post = $postsMediumOrShare instanceof PostShare ? $postsMediumOrShare : $postsMediumOrShare['post'];
@endphp

<div id="comment" class="w-auto h-auto rounded-lg">
    <div class="rounded bg-mycream h-96 overflow-scroll overflow-x-hidden">
        @foreach ($post->postComment as $comment)
            <div class="flex flex-row w-auto mt-4 comment-container" data-comment-id="{{ $comment->id }}">
                <x-profile-icon.small :user="$comment->user"/>
                <div class="flex flex-col bg-mywhite rounded-2xl overflow-hidden hover:shadow-lg relative max-w-96 max-h-96">
                    <div class="flex text-sm font-bold justify-start items-start mt-1 ml-3">
                        {{ $comment->user->username }}
                    </div>
                    <div class="flex text-sm font-medium p-2 w-60 h-auto justify-start items-start ml-1">
                        {{ $comment->content }}
                    </div>
                    <!-- Edit and Delete Buttons -->
                    <div class="absolute top-0 right-0 m-1 mt-1 pr-2 hidden comment-actions">
                        <button class="text-blue-500 text-sm bg-transparent border-none cursor-pointer edit-comment-button">
                            Edit
                        </button>
                        <form method="POST" action="{{ route('post.comment.delete', ['id' => $comment->id]) }}" class="delete-comment-form inline">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="postCommentToDeleteId" value="{{ $comment->id }}">
                            <button type="submit" class="text-red-500 text-sm bg-transparent border-none cursor-pointer">
                                Delete
                            </button>
                        </form>
                    </div>
                    <!-- Edit Comment Form -->
                    <form method="POST" action="{{ route('post.comment.update', ['id' => $comment->id]) }}" class="edit-comment-form hidden absolute inset-0 bg-mywhite p-1 rounded-lg shadow-md overflow-auto max-w-96">
                        @csrf
                        @method('PUT')
                        <textarea name="content" class="w-full rounded-lg text-sm bg-mywhite  overflow-auto" rows="1">{{ $comment->content }}</textarea>
                        <button type="submit" class="mt-2 text-sm text-mywhite bg-blue-500 hover:bg-blue-600 rounded-lg px-4 py-2">
                            Save
                        </button>
                        <button type="button" class="mt-2 text-sm text-gray-500 hover:text-gray-700 cancel-edit-button">
                            Cancel
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <x-forms.create-comment-form :postsMediumOrShare="$postsMediumOrShare"/>
</div>
