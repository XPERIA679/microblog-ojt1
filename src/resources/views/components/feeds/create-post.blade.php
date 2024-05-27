<form class="bg-mycream shadow-lg rounded-lg mb-6 p-4 items-center">
    <textarea name="comment" placeholder="Share your thoughts.."
        class="w-full rounded-lg p-2 text-sm bg-mywhite border border-transparent hover:drop-shadow-md rounded-tg placeholder-mygray resize-none overflow-x-hidden"></textarea>
    <div class="flex justify-between mt-2">
        <x-svgs.media-icon />
        <button
            class="flex items-center py-2 px-4 rounded-lg text-sm hover:bg-mydark hover:text-mycream bg-mywhite text-mydark shadow-lg transition-all">
            Post
            <x-svgs.post-icon />
        </button>
    </div>
</form>
