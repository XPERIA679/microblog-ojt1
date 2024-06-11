@php
    $post = $postsMediumOrShare instanceof App\Models\PostShare
        ? $postsMediumOrShare
        : $postsMediumOrShare['post'];
@endphp
<div id="comment" class="w-auto h-auto rounded-lg">
    <div class="rounded p-16 bg-mycream h-96 overflow-scroll overflow-x-hidden">
    @foreach ($post->postComment as $comment)
        <div class="flex flex-row w-auto mt-4">
            <x-profile-icon.small :user="$comment->user"/>
            <div class="flex flex-col bg-mywhite rounded-2xl overflow-hidden hover:shadow-lg">
                <div class="flex text-sm font-bold justify-start items-start mt-1 ml-3">
                    {{ $comment->user->username }}
                </div>
                <div class="flex text-sm font-medium p-2 w-60 h-auto justify-start items-start ml-1">
                    {{ $comment->content }}
                </div>
            </div>
            <div class="flex items-center ml-2">
                @if (auth()->id() == $comment->user_id)
                    <button class="text-blue-500 hover:text-blue-700" onclick="editComment({{ $comment->id }}, '{{ $comment->content }}')">Edit</button>
                    <form action="{{ route('postComment.delete') }}" method="POST" class="ml-2">
                        @csrf
                        <input type="hidden" name="postCommentToDeleteId" value="{{ $comment->id }}">
                        <button href="submit" class="text-red-500 hover:text-red-700">Delete</button>
                    </form>
                @endif
                <div id="editCommentModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center">
                    <div class="bg-white p-6 rounded-lg">
                        <form id="editCommentForm" action="{{ route('postComment.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="postCommentToEditId" id="postCommentToEditId">
                            <textarea name="content" id="editCommentContent" class="w-full border border-gray-300 p-2 rounded-lg"></textarea>
                            <button href="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Update</button>
                        </form>
                        <button onclick="closeEditModal()" class="bg-gray-500 text-white px-4 py-2 rounded mt-2">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <x-forms.create-comment-form :postsMediumOrShare="$postsMediumOrShare"/>
</div>
