function showProfile() {
    let profile = document.getElementById("profile");
    profile.classList.remove("hidden");
    profile.classList.add("flex")
    setTimeout(() => {
        profile.classList.add("opacity-100")
    }, 20);
}

function hideProfile() {
    let profile = document.getElementById("profile");
    profile.classList.add("opacity-0")
    profile.classList.remove("opacity-100")
    setTimeout(() => {
        profile.classList.add("hidden")
        profile.classList.remove("flex")
    }, 500);
}

let currentPage = 1;

function nextPage() {
    if (currentPage < 2) {
        document.getElementById(`page${currentPage}`).classList.add('opacity-0');
        setTimeout(() => {
            document.getElementById(`page${currentPage}`).classList.add('hidden');
            currentPage++;
            document.getElementById(`page${currentPage}`).classList.remove('hidden', 'opacity-0');
        }, 300);
    }
}

function prevPage() {
    if (currentPage > 1) {
        document.getElementById(`page${currentPage}`).classList.add('opacity-0');
        setTimeout(() => {
            document.getElementById(`page${currentPage}`).classList.add('hidden');
            currentPage--;
            document.getElementById(`page${currentPage}`).classList.remove('hidden', 'opacity-0');
        }, 300);
    }
}

function submitForm() {

    alert("Profile Updated!");
    setTimeout(() => {
        hideProfile();
    }, 100);
}
