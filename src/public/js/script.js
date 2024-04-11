document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.button1').addEventListener('click', function() {
        var requiredFields = document.querySelectorAll('input[required]');
        requiredFields.forEach(function(field) {
            field.removeAttribute('required');
        });
    });

    document.getElementById('signup-form').addEventListener('submit', function() {
        var requiredFields = document.querySelectorAll('input[required]');
        requiredFields.forEach(function(field) {
            field.setAttribute('required', 'required');
        });
    });
});
