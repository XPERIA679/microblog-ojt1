@php
    $postId = $postsMediumOrShare instanceof App\Models\PostShare 
        ? $postsMediumOrShare->id
        : $postsMediumOrShare['post']->id;
    $idField = $postsMediumOrShare instanceof App\Models\PostShare 
        ? 'post_share_id'
        : 'post_id'
@endphp
<form class="bg-mycream p-4 items-center" method="POST" action="{{ route('postComment.create') }}">
    @csrf
    <textarea maxlength="90" rows="3" placeholder="Thoughts about this post..."
        class="w-full rounded-lg p-2 text-sm bg-mycream border hover:drop-shadow-md rounded-tg placeholder-mygray resize-none overflow-x-hidden"
        autofocus name="content"></textarea>
    <input name="user_id" value = {{ auth()->id() }} hidden>
    <input name="{{$idField}}" value = "{{ $postId }}" hidden>
    <button
        class="flex items-center py-2 px-4 rounded-lg text-sm hover:bg-mydark hover:text-mycream bg-mywhite text-mydark shadow-lg transition-all">
        Comment
        <x-svgs.post-icon />
    </button>
</form>
