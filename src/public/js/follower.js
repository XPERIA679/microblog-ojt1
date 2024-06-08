function showfollowerModal() {
    const followerModal = document.getElementById("followerModal");
    followerModal.classList.remove("hidden");
    followerModal.classList.add("flex");
    setTimeout(() => {
        followerModal.classList.add("opacity-100");
        followerModal.classList.remove("opacity-0");
    }, 20);
}

function hidefollowerModal() {
    const followerModal = document.getElementById("followerModal");
    followerModal.classList.add("opacity-0");
    followerModal.classList.remove("opacity-100");
    setTimeout(() => {
        followerModal.classList.add("hidden");
        followerModal.classList.remove("flex");
    }, 500);
}
