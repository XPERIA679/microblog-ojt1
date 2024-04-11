<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ url('assets/css/registration.css') }}"> --}}
    <title>Sign Up</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="title">
            <h3>Sign Up</h3>
        </div>

        <form action="#" id="signup-form">
            <div class="user-details">

                <div class="input-box">
                    <input type="email" placeholder="example@gmail.com" autocomplete="off" required>
                    <span>Email</span>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="juandelacruz" autocomplete="off" required>
                    <span>Username</span>
                </div>

                <div class="input-box">
                    <input type="password" required>
                    <span>Password</span>
                </div>

                <div class="input-box">
                    <input type="password" required>
                    <span>Confirm Password</span>
                </div>

                <div class="input-box">
                    <button class="button" href="home">Create Account</button>
                </div>

                <div class="input-box">
                    <button class="button1" href="login">Already have an account?</button>
                </div>

            </div>
        </form>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
