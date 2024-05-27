function showPost() {
    let postedit = document.getElementById("postedit");
    postedit.classList.remove("hidden");
    postedit.classList.add("flex")
    setTimeout(() => {
        postedit.classList.add("opacity-100")
    }, 20);
}

function hidePost() {
    let postedit = document.getElementById("postedit");
    postedit.classList.add("opacity-0")
    postedit.classList.remove("opacity-100")
    setTimeout(() => {
        postedit.classList.add("hidden")
        postedit.classList.remove("flex")
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

    alert("Post Updated!");
    setTimeout(() => {
        hidePost();
    }, 100);
}
