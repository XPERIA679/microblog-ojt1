<div onclick="hidefollowingModal()" id="followingModal"
    class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500 z-50">
    <div onclick="event.stopImmediatePropagation()"
        class="bg-mycream rounded-lg shadow-md p-10 flex justify-center items-center">
        <div id="followingModal" class="bg-mycream mx-auto overflow-hidden transition-opacity duration-500">
            <div class="text-mydark font-bold text-center w-full mb-2">
                <h1>People you followed</h1>
            </div>
            <div class="rounded-lg my-2 p-6 bg-mycream h-96 overflow-scroll overflow-x-hidden">
                <div class="flex flex-row p-2 w-auto">
                    <div class="w-auto h-auto rounded-full ml-3">
                        <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer"
                            src="assets/images/moon.jpg" alt="moon">
                    </div>

                    <div class="flex flex-col my-2 ml-4 pr-12">
                        <div class="text-mydark text-sm font-semibold cursor-pointer">
                            Moon
                        </div>

                        <div class="text-mydark flex font-light text-xs">
                            33k followers
                        </div>
                    </div>

                    <div class="flex flex-col my-2 ml-10">
                        <button
                            class="flex items-center justify-center text-center text-xs font-semibold bg-mydark text-mycream hover:bg-mygray hover:text-mycream p-3 rounded-full transition-all">
                            Followed
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
