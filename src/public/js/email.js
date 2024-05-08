document.addEventListener("DOMContentLoaded", function() {
    var button = document.querySelector("button[type='submit']");
    var countdownDisplay = document.getElementById("countdown");

    button.disabled = true; // Initially disable the button
    var countdownSeconds = 60;
    countdownDisplay.textContent = countdownSeconds;

    var countdownInterval = setInterval(function() {
        countdownSeconds--;
        countdownDisplay.textContent = countdownSeconds;
        if (countdownSeconds <= 0) {
            clearInterval(countdownInterval);
            button.disabled = false; // Enable the button after countdown finishes
        }
    }, 1000); // Update every second
});
