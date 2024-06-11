function editComment(commentId, content) {
    document.getElementById('postCommentToEditId').value = commentId;
    document.getElementById('editCommentContent').value = content;
    document.getElementById('editCommentModal').classList.remove('hidden');
}

function closeEditModal() {
    document.getElementById('editCommentModal').classList.add('hidden');
}
