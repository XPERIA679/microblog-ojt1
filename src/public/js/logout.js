document.getElementById('profile-image-container').addEventListener('click', function() {
    var dropdownMenu = document.getElementById('dropdown-menu');
    dropdownMenu.classList.toggle('hidden');
    dropdownMenu.classList.toggle('show');
});

document.addEventListener('click', function(event) {
    var profileImageContainer = document.getElementById('profile-image-container');
    var dropdownMenu = document.getElementById('dropdown-menu');

    var isClickInside = profileImageContainer.contains(event.target) ||
                        dropdownMenu.contains(event.target);

    if (!isClickInside) {
        dropdownMenu.classList.add('hidden');
        dropdownMenu.classList.remove('show');
    }
});

document.getElementById('logout-button').addEventListener('click', function() {
    document.getElementById('logout-form').submit();
});
