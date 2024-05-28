function showComment() {
    const comment = document.getElementById("comment");
    comment.classList.remove("hidden");
    comment.classList.add("flex");
    setTimeout(() => {
        comment.classList.add("opacity-100");
    }, 20);
}

function hideComment() {
    const comment = document.getElementById("comment");
    comment.classList.add("opacity-0");
    comment.classList.remove("opacity-100");
    setTimeout(() => {
        comment.classList.add("hidden");
        comment.classList.remove("flex");
    }, 500);
}
