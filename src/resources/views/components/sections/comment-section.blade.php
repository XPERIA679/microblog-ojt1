@php
    use App\Models\PostShare;

    $post = $postsMediumOrShare instanceof PostShare
        ? $postsMediumOrShare
        : $postsMediumOrShare['post'];
@endphp
<div id="comment" class="w-auto h-auto rounded-lg">
    <div class="rounded p-16 bg-mycream h-96 overflow-scroll overflow-x-hidden">
        @foreach ($post->postComment as $key => $comment)
            <div class="flex flex-row w-auto mt-4 comment-container pr-24" data-comment-id="{{ $comment->id }}">
                <x-profile-icon.small :user="$comment->user"/>
                <div class="flex flex-col bg-mywhite rounded-2xl overflow-hidden hover:shadow-lg relative">
                    <div class="flex text-sm font-bold justify-start items-start mt-1 ml-3">
                        {{ $comment->user->username }}
                    </div>
                    <div class="flex text-sm font-medium p-2 w-60 h-auto justify-start items-start ml-1">
                        {{ $comment->content }}
                    </div>
                    <!-- Delete Button -->
                    <form method="POST" action="{{ route('post.comment.delete', ['id' => $comment->id]) }}" class="delete-comment-form absolute top-0 right-0 m-1 pr-2 hidden">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 text-sm bg-transparent border-none cursor-pointer">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <x-forms.create-comment-form :postsMediumOrShare="$postsMediumOrShare"/>
</div>
