document.addEventListener('DOMContentLoaded', function() {
    const commentContainers = document.querySelectorAll('.comment-container');

    commentContainers.forEach(container => {
        const commentActions = container.querySelector('.comment-actions');
        const editButton = container.querySelector('.edit-comment-button');
        const editForm = container.querySelector('.edit-comment-form');
        const cancelEditButton = container.querySelector('.cancel-edit-button');

        container.addEventListener('mouseenter', function() {
            if (commentActions) {
                commentActions.classList.remove('hidden');
            }
        });

        container.addEventListener('mouseleave', function() {
            if (commentActions) {
                commentActions.classList.add('hidden');
            }
        });

        if (editButton) {
            editButton.addEventListener('click', function() {
                if (editForm) {
                    editForm.classList.remove('hidden');
                }
            });
        }

        if (cancelEditButton) {
            cancelEditButton.addEventListener('click', function() {
                if (editForm) {
                    editForm.classList.add('hidden');
                }
            });
        }
    });
});
