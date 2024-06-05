<div onclick="hideUserPost({{ $postsMediumOrShare['post']->id }})" id="sharepost-{{ $postsMediumOrShare['post']->id }}"
    class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500">
    <div onclick="event.stopImmediatePropagation()" class="bg-mycream rounded-2xl shadow-md w-auto h-auto">
        <form action="/share-post" method="POST">
            @csrf
        <div class="flex flex-row mx-2 w-auto">
            <div class="w-auto h-auto p-2 rounded-full">
                <img class="w-8 h-8 m-1 object-cover rounded-full shadow cursor-pointer" src="assets/images/moon.jpg"
                    alt="moon">
            </div>
            <input type="text" name= "post_id" value="{{$postsMediumOrShare['post']->id}}" hidden>
            <input type="text" name= "user_id" value="{{auth()->id()}}" hidden>
            <input name="repost_content" maxlength="45"
                class="bg-mycream p-2 w-11/12 focus:outline-none text-md m-2 font-medium text-mydark rounded-2xl placeholder-mygray resize-none overflow-x-hidden">
            </input>
            <button
                class="flex items-center py-2 px-4 rounded-lg text-sm text-mydark transition-all">
                <x-svgs.post-icon />
            </button>
        </div>
        </form>
        <div class="border shadow-lg border-solid border-opacity-20 border-mygray rounded-2xl">
            <x-sections.post :postsMediumOrShare="$postsMediumOrShare" :showInteraction="false" :showTimerAndEdit="false"/>
        </div>
    </div>
</div>
