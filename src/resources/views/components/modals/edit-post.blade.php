@php
    $post = $postsMediumOrShare instanceof App\Models\PostShare 
        ? $postsMediumOrShare
        : $postsMediumOrShare['post'];
    $postContent = $post instanceof App\Models\PostShare 
        ? $post->repost_content
        : $post->content;
    $postMedia = $post->postMedia->image ?? null;
@endphp

<div onclick="hidePost('{{$post->id}}')" id="postedit-{{$post->id}}"
    class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500">
    <div onclick="event.stopImmediatePropagation()"
        class="bg-mycream rounded-lg shadow-md p-10 flex justify-center items-center">
        <div id="postedit" class="bg-mycream mx-auto overflow-hidden transition-opacity duration-500">
            <h3 class="font-bold uppercase hover:drop-shadow-md">re-write your thoughts</h3>
            <hr class="border shadow-lg border-solid border-opacity-20 border-mygray">
            <form action="/edit-post" method="POST" enctype="multipart/form-data" class="w-auto my-3 py-2 rounded-lg">
                @csrf
                @method('PUT')
                <input id="content" name="editedContent" maxlength="140" rows="3"
                    class="w-full rounded-lg p-2 text-sm bg-mywhite border-transparent hover:drop-shadow-md placeholder-mygray resize-none overflow-x-hidden"
                    value = "{{ $postContent }}">
                <div class="relative flex justify-center items-center m-3 pb-4 rounded-2xl">
                    <span class="absolute top-1 right-6 cursor-pointer text-2xl text-mywhite ">&times;</span>
                    @if (!empty($postMedia))
                        <div class="w-auto h-auto flex justify-center items-center m-3 pb-4">
                            <img class="flex justify-center items-center mx-3 rounded-md w-96 h-96 object-contain"
                                src="{{ asset($postMedia) }}" alt="post image">
                        </div>
                    @endif
                </div>
                <div class="flex justify-between mt-2">
                    <x-svgs.media-icon />
                    <button
                        class="flex items-center py-2 px-4 rounded-lg text-sm hover:bg-mydark hover:text-mycream bg-mywhite text-mydark shadow-lg transition-all">
                        Post
                        <x-svgs.post-icon />
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
