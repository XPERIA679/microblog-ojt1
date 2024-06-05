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
    <form class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all focus:bg-mydark focus:text-mycream rounded" action="/unlike-post" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="type" value="{{ $postsMediumOrShare instanceof App\Models\PostShare ? 'share' : 'originalPost' }}" hidden>
        <input type="text" name="id" value="{{ $post->id }}" hidden>
    <button href="submit"
        class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all focus:bg-mydark focus:text-mycream rounded">
        Unlike
    </button>
    </form>
    @else
    <form class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all focus:bg-mydark focus:text-mycream rounded" action="/like-post" method="POST">
        @csrf
        <input type="text" name="type" value="{{ $postsMediumOrShare instanceof App\Models\PostShare ? 'share' : 'originalPost' }}" hidden>
        <input type="text" name="id" value="{{ $postsMediumOrShare instanceof App\Models\PostShare ? $postsMediumOrShare->id : $postsMediumOrShare['post']->id }}" hidden>
    <button href="submit"
        class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all focus:bg-mydark focus:text-mycream rounded">
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

<div id="{{ $type }}-{{ $postId }}" class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500 flex">
    <div onclick="event.stopPropagation()" class="bg-mycream rounded-lg p-2 shadow-md w-1/2">
        <x-sections.comment-section :postsMediumOrShare="$postsMediumOrShare" />
        <button onclick="hideComment('{{ $type }}-{{ $postId }}')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Close
        </button>
    </div>
</div>