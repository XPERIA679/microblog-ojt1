<div class="grid grid-cols-3 justify-center items-center divide-x-2 divide-mydark divide-solid">
    @php
        $post = $postsMediumOrShare instanceof App\Models\PostShare
            ? $postsMediumOrShare
            : $postsMediumOrShare['post'];
        $idField = $postsMediumOrShare instanceof App\Models\PostShare
            ? 'post_share_id'
            : 'post_id';
        $type = $postsMediumOrShare instanceof App\Models\PostShare
            ? 'shared-post-comment'
            : 'post-comment';
        $postId = $post->id;
    @endphp

    @if (in_array(auth()->id(), $post->postLike->whereNotNull($idField)->pluck('user_id')->toArray()))
        <form class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all focus:bg-mydark focus:text-mycream rounded" action="{{ route('post.unlike') }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="text" name="type" value="{{ $postsMediumOrShare instanceof App\Models\PostShare ? 'share' : 'originalPost' }}" hidden>
            <input type="text" name="id" value="{{ $post->id }}" hidden>
            <button onclick="preventButtonMashing(this)" href="submit" class="text-center w-full">
                Unlike
            </button>
        </form>
    @else
        <form class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all rounded" action="{{ route('post.like') }}" method="POST">
            @csrf
            <input type="text" name="type" value="{{ $postsMediumOrShare instanceof App\Models\PostShare ? 'share' : 'originalPost' }}" hidden>
            <input type="text" name="id" value="{{ $postsMediumOrShare instanceof App\Models\PostShare ? $postsMediumOrShare->id : $postsMediumOrShare['post']->id }}" hidden>
            <button onclick="preventButtonMashing(this)" href="submit" class="text-center w-full">
                Like
            </button>
        </form>
    @endif

    <button onclick="showComment('{{ $type }}-{{ $postId }}')" class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all rounded">
        Comment
    </button>

    <button onclick="showUserPost({{ $postsMediumOrShare['post']->id }})" class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all rounded">
        Share
    </button>
</div>
