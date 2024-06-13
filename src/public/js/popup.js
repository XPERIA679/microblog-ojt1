document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        var notifMessage = document.getElementById('notifMessage');
        if (notifMessage) {
            notifMessage.classList.add('opacity-0');
            setTimeout(function () {
                notifMessage.style.display = 'none';
            }, 500); 
        }
    }, 4000);
});
