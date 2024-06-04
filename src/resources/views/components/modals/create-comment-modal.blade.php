<div onclick="hideComment({{ $postsMediumOrShare['post']->id }})" id="comment-{{ $postsMediumOrShare['post']->id }}" class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500">
    <div onclick="event.stopImmediatePropagation()" class="bg-mycream rounded-lg p-2 shadow-md w-1/2">
        <x-sections.comment-section :postsMediumOrShare="$postsMediumOrShare"/>
    </div>
</div>
