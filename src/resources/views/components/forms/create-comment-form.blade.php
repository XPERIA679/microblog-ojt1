@php
    $postId =
        $postsMediumOrShare instanceof App\Models\PostShare ? $postsMediumOrShare->id : $postsMediumOrShare['post']->id;
    $idField = $postsMediumOrShare instanceof App\Models\PostShare ? 'post_share_id' : 'post_id';
@endphp
<form class="bg-mycream p-4 items-center" method="POST" action="{{ route('postComment.create') }}">
    @csrf
    <textarea maxlength="90" rows="3" placeholder="Thoughts about this post..."
        class="w-full rounded-lg p-2 text-sm bg-mycream border hover:drop-shadow-md rounded-tg focus:outline-none placeholder-mygray resize-none overflow-x-hidden"
        autofocus name="content"></textarea>
    <input name="user_id" value={{ auth()->id() }} hidden>
    <input name="{{ $idField }}" value = "{{ $postId }}" hidden>
    <x-buttons.comment-btn />
</form>
