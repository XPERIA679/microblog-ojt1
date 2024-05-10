function showDialog() {
    let dialog = document.getElementById("dialog");
    dialog.classList.remove("hidden");
    dialog.classList.add("flex")
    setTimeout(() => {
        dialog.classList.add("opacity-100")
    }, 20);
}

function hideDialog() {
    let dialog = document.getElementById("dialog");
    dialog.classList.add("opacity-0")
    dialog.classList.remove("opacity-100")
    setTimeout(() => {
        dialog.classList.add("hidden")
        dialog.classList.remove("flex")
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
        hideDialog();
    }, 100);
}
