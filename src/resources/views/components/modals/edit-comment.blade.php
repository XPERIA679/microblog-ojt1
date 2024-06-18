<div onclick="closeEditModal()" id="editCommentModal"
    class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500">
    <div onclick="event.stopImmediatePropagation()"
        class="bg-mycream rounded-lg shadow-md p-10 w-2/4 flex justify-center items-center transition-opacity duration-500">


        <form class="flex-col m-2 w-full" id="editCommentForm" action="{{ route('postComment.update') }}" method="POST">
            @csrf
            <input type="hidden" name="postCommentToEditId" id="postCommentToEditId">
            <textarea maxlength="90" rows="3" name="content" id="editCommentContent"
                class="w-full rounded-lg p-2 text-sm bg-mycream border hover:drop-shadow-md rounded-tg focus:outline-none resize-none overflow-x-hidden"
                autofocus></textarea>
            <div onclick="preventButtonMashing(this)" class="flex-col justify-center items-center mt-2">
                <x-buttons.comment-btn />
            </div>
        </form>



    </div>
</div>
