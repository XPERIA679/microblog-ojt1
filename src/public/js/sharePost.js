function showUserPost(postId) {
    const sharepost = document.getElementById(`sharepost-${postId}`);
    sharepost.classList.remove("hidden");
    sharepost.classList.add("flex");
    setTimeout(() => {
        sharepost.classList.add("opacity-100");
        sharepost.classList.remove("opacity-0");
    }, 20);
}

function hideUserPost(postId) {
    const sharepost = document.getElementById(`sharepost-${postId}`);
    sharepost.classList.add("opacity-0");
    sharepost.classList.remove("opacity-100");
    setTimeout(() => {
        sharepost.classList.add("hidden");
        sharepost.classList.remove("flex");
    }, 500);
}
