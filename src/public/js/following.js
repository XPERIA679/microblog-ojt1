function showfollowingModal() {
    const followingModal = document.getElementById("followingModal");
    followingModal.classList.remove("hidden");
    followingModal.classList.add("flex");
    setTimeout(() => {
        followingModal.classList.add("opacity-100");
        followingModal.classList.remove("opacity-0");
    }, 20);
}

function hidefollowingModal() {
    const followingModal = document.getElementById("followingModal");
    followingModal.classList.add("opacity-0");
    followingModal.classList.remove("opacity-100");
    setTimeout(() => {
        followingModal.classList.add("hidden");
        followingModal.classList.remove("flex");
    }, 500);
}
