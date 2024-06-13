@if(!$postsMediumOrShare instanceof App\Models\PostShare)
<div onclick="hideUserPost({{ $postsMediumOrShare['post']->id }})" id="sharepost-{{ $postsMediumOrShare['post']->id }}" class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500 z-9999">
    <div onclick="event.stopImmediatePropagation()" class="bg-mycream rounded-2xl shadow-md w-11/12 max-w-lg max-h-[calc(100vh-50px)] overflow-y-auto">
        <form action=" {{ route('postShare.create') }} " method="POST">
            @csrf
            <div class="flex flex-row mx-2 w-auto">
                <div class="w-auto h-auto p-2 rounded-full">
                    <img class="w-8 h-8 m-1 object-cover rounded-full shadow cursor-pointer" src="assets/images/moon.jpg" alt="moon">
                </div>
                <input type="text" name="post_id" value="{{$postsMediumOrShare['post']->id}}" hidden>
                <input type="text" name="user_id" value="{{auth()->id()}}" hidden>
                <textarea name="repost_content" maxlength="45" rows="2" class="bg-mycream p-2 w-11/12 focus:outline-none text-md m-2 font-medium text-mydark rounded-2xl placeholder-mygray resize-none overflow-x-hidden"></textarea>
                <button class="flex items-center py-2 px-4 rounded-lg text-sm text-mydark transition-all">
                    <x-svgs.post-icon />
                </button>
            </div>
        </form>
        <div class="border shadow-lg border-solid border-opacity-20 border-mygray rounded-2xl">
            <x-sections.post :postsMediumOrShare="$postsMediumOrShare" :showInteraction="false" :showTimerAndEdit="false"/>
        </div>
    </div>
</div>
@endif
