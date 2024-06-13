function editComment(commentId, content) {
    const editCommentModal = document.getElementById('editCommentModal');
    document.getElementById('postCommentToEditId').value = commentId;
    document.getElementById('editCommentContent').value = content;
    editCommentModal.classList.remove("hidden");
    editCommentModal.classList.add("flex");
    setTimeout(() => {
        editCommentModal.classList.add("opacity-100");
        editCommentModal.classList.remove("opacity-0");
    }, 20);
}

function closeEditModal() {
    const editCommentModal = document.getElementById('editCommentModal');
    editCommentModal.classList.add("opacity-0");
    editCommentModal.classList.remove("opacity-100");
    setTimeout(() => {
        editCommentModal.classList.add("hidden");
        editCommentModal.classList.remove("flex");
    }, 500);
}
