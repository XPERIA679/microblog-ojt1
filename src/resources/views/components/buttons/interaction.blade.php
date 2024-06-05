<div class="grid grid-cols-3 justify-center items-center divide-x-2 divide-mydark divide-solid">
    @php
        $post = $postsMediumOrShare instanceof App\Models\PostShare ? $postsMediumOrShare->post : $postsMediumOrShare['post'];
    @endphp
    @if (in_array(auth()->id(), $post->postLike->pluck('user_id')->toArray()))
    <form class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all focus:bg-mydark focus:text-mycream rounded" action="/unlike-post" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="type" value="{{ $post instanceof App\Models\PostShare ? 'share' : 'originalPost' }}" hidden>
        <input type="text" name="id" value="{{ $post->id }}" hidden>
    <button class="text-center w-full">
        Unlike
    </button>
    </form>
    @else
    <form class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all focus:bg-mydark focus:text-mycream rounded" action="/like-post" method="POST">
        @csrf
    <input type="text" name="type" value="{{ $post instanceof App\Models\PostShare ? 'share' : 'originalPost' }}" hidden>
    <input type="text" name="id" value="{{ $post->id }}" hidden>
    <button class="text-center w-full">
        Like
    </button>
    </form>
    @endif
    <button onclick="showComment({{ $postsMediumOrShare['post']->id }})"
        class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all rounded">
        Comment
    </button>
    <button onclick="showUserPost({{ $postsMediumOrShare['post']->id }})"
        class="col-span-1 hover:bg-mydark hover:text-mycream font-semibold justify-center items-center p-2 transition-all rounded">
        Share
    </button>
</div>
