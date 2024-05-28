<div onclick="hideUserPost()" id="sharepost"
    class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500">

    <div onclick="event.stopImmediatePropagation()" class="bg-mycream rounded-lg p-2 shadow-md w-auto h-auto">
        <div class="flex flex-row mx-2 w-auto">
            <div class="w-auto h-auto p-2 rounded-full">
                <img class="w-8 h-8 m-1 object-cover rounded-full shadow cursor-pointer" src="assets/images/moon.jpg"
                    alt="moon">
            </div>
            <input placeholder="Thoughts..." maxlength="45" rows="3"
                class="bg-mycream p-2 w-11/12 focus:outline-none text-md m-2 font-medium text-mydark rounded-2xl placeholder-mygray resize-none overflow-x-hidden">
            </input>
            <div class="flex justify-center items-center p-2">
                <x-svgs.post-icon />
            </div>
        </div>
        <div class="border shadow-lg border-solid border-opacity-20 border-mygray rounded-2xl">
            <x-feeds.post-profile-icon />
            <x-feeds.post />
            <x-feeds.interactions-count />
        </div>
    </div>
</div>
