function showsignupForm() {
    const signupForm = document.getElementById("signupForm");
    signupForm.classList.remove("hidden");
    signupForm.classList.add("flex");
    setTimeout(() => {
        signupForm.classList.add("opacity-100");
        signupForm.classList.remove("opacity-0");
    }, 20);
}

function hidesignupForm() {
    const signupForm = document.getElementById("signupForm");
    signupForm.classList.add("opacity-0");
    signupForm.classList.remove("opacity-100");
    setTimeout(() => {
        signupForm.classList.add("hidden");
        signupForm.classList.remove("flex");
    }, 500);
}
