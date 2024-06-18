function showProfile() {
    const profile = document.getElementById("profile");
    profile.classList.remove("hidden");
    profile.classList.add("flex");
    setTimeout(() => {
        profile.classList.add("opacity-100");
        profile.classList.remove("opacity-0");
    }, 20);
}

function hideProfile() {
    const profile = document.getElementById("profile");
    profile.classList.add("opacity-0");
    profile.classList.remove("opacity-100");
    setTimeout(() => {
        profile.classList.add("hidden");
        profile.classList.remove("flex");
    }, 500);
}

function nextPage(pageId) {
    document.getElementById('page1').classList.add('hidden');
    document.getElementById('page2').classList.add('hidden');
    document.getElementById('page3').classList.add('hidden');
    document.getElementById(pageId).classList.remove('hidden');
}

function prevPage(pageId) {
    document.getElementById('page1').classList.add('hidden');
    document.getElementById('page2').classList.add('hidden');
    document.getElementById('page3').classList.add('hidden');
    document.getElementById(pageId).classList.remove('hidden');
}