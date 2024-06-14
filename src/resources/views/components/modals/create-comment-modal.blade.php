@php
    $postId = $postsMediumOrShare instanceof App\Models\PostShare
        ? $postsMediumOrShare->id
        : $postsMediumOrShare['post']->id;
    $type = $postsMediumOrShare instanceof App\Models\PostShare
        ? 'shared-post-comment'
        : 'post-comment';
@endphp

<div onclick="hideComment('{{ $type }}-{{ $postId }}')" id="{{ $type }}-{{ $postId }}" class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500 z-9999">
    <div onclick="event.stopPropagation()" class="bg-mycream rounded-lg p-2 shadow-md w-1/2 max-w-lg max-h-[calc(100vh-50px)] overflow-y-auto">
        <x-sections.comment-section :postsMediumOrShare="$postsMediumOrShare"/>
    </div>
</div>
