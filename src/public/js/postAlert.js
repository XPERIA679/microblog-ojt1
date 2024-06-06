document.addEventListener('DOMContentLoaded', (event) => {
    const submitBtn = document.getElementById('submitBtn');
    const form = document.getElementById('postForm');

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: '#252323',
        customClass: {
            popup: 'rounded-md shadow-lg',
            title: 'text-mydark font-semibold',
        },
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
    });

    submitBtn.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default form submission

        Toast.fire({
            icon: 'success',
            title: 'Posting...'
        });

        setTimeout(() => {
            form.submit(); // Submit the form after the toast
        }, 100); // Ensure the form is submitted after the Toast
    });
});
