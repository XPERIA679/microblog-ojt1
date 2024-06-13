document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('menu-btn')) {
            const dropdownId = event.target.dataset.dropdownId;
            const dropdownPost = document.getElementById(dropdownId);
            dropdownPost.classList.toggle('hidden');
            dropdownPost.classList.toggle('show');
            return;
        }
        
        document.querySelectorAll('.dropdown-post').forEach(dropdown => {
            if (!dropdown.classList.contains('hidden')) {
                dropdown.classList.add('hidden');
                dropdown.classList.remove('show');
            }
        });
    });

    document.addEventListener('click', function(event) {
        if (event.target.id === 'delete-btn') {
            event.preventDefault();
            deleteBtn.classList.remove('hidden');
            return;
        }
    });

    document.getElementById('cancel').addEventListener('click', function() {
        document.getElementById('delete-modal').classList.add('hidden');
    });
});
