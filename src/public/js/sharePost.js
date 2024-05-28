function showUserPost() {
    const sharepost = document.getElementById("sharepost");
    sharepost.classList.remove("hidden");
    sharepost.classList.add("flex");
    setTimeout(() => {
        sharepost.classList.add("opacity-100");
    }, 20);
}

function hideUserPost() {
    const sharepost = document.getElementById("sharepost");
    sharepost.classList.add("opacity-0");
    sharepost.classList.remove("opacity-100");
    setTimeout(() => {
        sharepost.classList.add("hidden");
        sharepost.classList.remove("flex");
    }, 500);
}
