<div class="bg-mycream rounded-lg">
    <form class="bg-mycream shadow-lg rounded-lg mb-6 p-4 items-center">
        <textarea id="textarea1" maxlength="140" rows="3" placeholder="Share your thoughts.."
            class="w-full rounded-lg p-2 text-sm bg-mywhite border-transparent hover:drop-shadow-md rounded-tg placeholder-mygray resize-none overflow-x-hidden"
            autofocus></textarea>
        <div class="text-sm" id="theCount">
            <span id="current">0</span>
            <span id="maximum">/ 140</span>
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
