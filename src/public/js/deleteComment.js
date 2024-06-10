document.addEventListener('DOMContentLoaded', function() {
    const commentContainers = document.querySelectorAll('.comment-container');

    commentContainers.forEach(container => {
        container.addEventListener('mouseenter', function() {
            const deleteButton = container.querySelector('.delete-comment-form');
            if (deleteButton) {
                deleteButton.classList.remove('hidden');
            }
        });

        container.addEventListener('mouseleave', function() {
            const deleteButton = container.querySelector('.delete-comment-form');
            if (deleteButton) {
                deleteButton.classList.add('hidden');
            }
        });
    });
});
