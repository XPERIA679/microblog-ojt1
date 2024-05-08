document.addEventListener("DOMContentLoaded", function() {
    var button = document.querySelector("button[type='submit']");
    var countdownDisplay = document.getElementById("countdown");

    button.disabled = true;
    var countdownSeconds = 60;
    countdownDisplay.textContent = countdownSeconds;

    var countdownInterval = setInterval(function() {
        countdownSeconds--;
        countdownDisplay.textContent = countdownSeconds;
        if (countdownSeconds <= 0) {
            clearInterval(countdownInterval);
            button.disabled = false;
        }
    }, 1000);
});
