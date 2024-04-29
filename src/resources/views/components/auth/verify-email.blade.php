<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification Notice</title>
    <script>
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
    </script>
</head>
<body>
    <div>
        <h2>Email Verification Required</h2>
        <p>
            Before proceeding, please check your email for a verification link. If you haven't received the email, please click the button below to request another verification link.
        </p>
        <p>Resend Verification Email in <span id="countdown"></span> seconds</p>
        <form method="GET" action='/resend-email'>
            @csrf
            <p>Your Email: </p><br>
            <input type="email" value="{{ $userEmail }}" disabled>
            <input type="hidden" name="userEmail" value="{{ $userEmail }}">
            <button type="submit">Resend Verification Email</button>
        </form>
    </div>
</body>
</html>
