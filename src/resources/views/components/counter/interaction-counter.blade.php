<div class="mt-1 mx-3 flex flex-row text-xs hover:drop-shadow-md transition-all">
    @php
        $post = $postsMediumOrShare instanceof App\Models\PostShare
            ? $postsMediumOrShare
            : $postsMediumOrShare['post'];
    @endphp

    @foreach (['postLike', 'postComment', 'postShare'] as $type)
        @if (isset($post->{$type}))
            <div class="flex font-medium rounded-md mb-2 mr-4 items-center cursor-pointer text-mydark hover:text-mygray hover:drop-shadow-md">
                {{ $post->{$type}->count() }}
                <div class="ml-1 text-mydark hover:text-mygray hover:drop-shadow-md">
                    {{ substr($type, 4) }}
                </div>
            </div>
        @endif
    @endforeach
</div>