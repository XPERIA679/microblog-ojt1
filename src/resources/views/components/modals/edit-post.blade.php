<div onclick="hidePost()" id="postedit"
    class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500 z-9999">
    <div onclick="event.stopImmediatePropagation()"
        class="bg-mycream rounded-lg shadow-md p-10 flex justify-center items-center max-w-lg max-h-[calc(100vh-50px)] overflow-y-auto">
        <div id="postedit" class="bg-mycream mx-auto overflow-hidden transition-opacity duration-500 max-w-lg max-h-[calc(100vh-50px)] overflow-y-auto">
            <h3 class="font-bold uppercase hover:drop-shadow-md">re-write your thoughts</h3>
            <hr class="border shadow-lg border-solid border-opacity-20 border-mygray">
            <form class="w-auto my-3 py-2 rounded-lg">
                <textarea maxlength="140" rows="3"
                    class="w-full rounded-lg p-2 text-sm bg-mywhite border-transparent hover:drop-shadow-md placeholder-mygray resize-none overflow-x-hidden"></textarea>
                <div class="relative flex justify-center items-center m-3 pb-4 rounded-2xl">
                    <span class="absolute top-1 right-6 cursor-pointer text-2xl text-mywhite ">&times;</span>
                    <img class="flex justify-center items-center mx-3 rounded-xl w-96 h-96 object-contain hover:shadow-lg"
                        src="assets/images/post1.jpeg" alt="post">
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
