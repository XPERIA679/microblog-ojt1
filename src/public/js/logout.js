const profileImageContainer = document.getElementById('profile-image-container');
const dropdownMenu = document.getElementById('dropdown-menu');
const logoutButton = document.getElementById('logout-button');
const logoutForm = document.getElementById('logout-form');

profileImageContainer.addEventListener('click', function() {
    dropdownMenu.classList.toggle('hidden');
    dropdownMenu.classList.toggle('show');
});

document.addEventListener('click', function(event) {
    const isClickInside = profileImageContainer.contains(event.target) ||
                          dropdownMenu.contains(event.target);

    if (!isClickInside) {
        dropdownMenu.classList.add('hidden');
        dropdownMenu.classList.remove('show');
    }
});

logoutButton.addEventListener('click', function() {
    logoutForm.submit();
});
