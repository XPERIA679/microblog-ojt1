function showComment(postId) {
    const comment = document.getElementById(`comment-${postId}`);
    comment.classList.remove("hidden");
    comment.classList.add("flex");
    setTimeout(() => {
        comment.classList.add("opacity-100");
        comment.classList.remove("opacity-0");
    }, 20);
}

function hideComment(postId) {
    const comment = document.getElementById(`comment-${postId}`);
    comment.classList.add("opacity-0");
    comment.classList.remove("opacity-100");
    setTimeout(() => {
        comment.classList.add("hidden");
        comment.classList.remove("flex");
    }, 500);
}