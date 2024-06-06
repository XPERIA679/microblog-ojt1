document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('saveProfile');
    const form = document.getElementById('profileForm');

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: '#252323',
        customClass: {
            popup: 'rounded-md shadow-lg',
            title: 'text-mydark font-semibold',
        },
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
    });

    btn.addEventListener('click', (event) => {
        event.preventDefault();

        Toast.fire({
            icon: 'success',
            title: 'Profile Saved!',
        });

        hideProfile();

        setTimeout(() => {
            form.submit();
        }, 1500);
    });
});

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
