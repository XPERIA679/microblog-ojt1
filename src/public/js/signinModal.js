function showsigninForm() {
    const signinForm = document.getElementById("signinForm");
    signinForm.classList.remove("hidden");
    signinForm.classList.add("flex");
    setTimeout(() => {
        signinForm.classList.add("opacity-100");
        signinForm.classList.remove("opacity-0");
    }, 20);
}

function hidesigninForm() {
    const signinForm = document.getElementById("signinForm");
    signinForm.classList.add("opacity-0");
    signinForm.classList.remove("opacity-100");
    setTimeout(() => {
        signinForm.classList.add("hidden");
        signinForm.classList.remove("flex");
    }, 500);
}
