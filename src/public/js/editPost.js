function showPost() {
    const postedit = document.getElementById("postedit");
    postedit.classList.remove("hidden");
    postedit.classList.add("flex");
    setTimeout(() => {
        postedit.classList.add("opacity-100");
        postedit.classList.remove("opacity-0");
    }, 20);
}

function hidePost() {
    const postedit = document.getElementById("postedit");
    postedit.classList.add("opacity-0");
    postedit.classList.remove("opacity-100");
    setTimeout(() => {
        postedit.classList.add("hidden");
        postedit.classList.remove("flex");
    }, 500);
}
