const menuBtn = document.getElementById('menu-btn');
const dropdownPost = document.getElementById('dropdown-post');
const deleteBtn = document.getElementById('delete-btn');
const deleteModal = document.getElementById('delete-modal');
const cancelBtn = document.getElementById('cancel');


menuBtn.addEventListener('click', function() {
    dropdownPost.classList.toggle('hidden');
    dropdownPost.classList.toggle('show');
});

document.addEventListener('click', function(event) {
    const isClickInside = menuBtn.contains(event.target) ||
                            dropdownPost.contains(event.target);

    if (!isClickInside) {
        dropdownPost.classList.add('hidden');
        dropdownPost.classList.remove('show');
    }
});

deleteModal.addEventListener('click', function(event) {
    event.preventDefault();
    deleteBtn.classList.remove('hidden');
});

cancelBtn.addEventListener('click', function() {
    deleteModal.classList.add('hidden');
});

