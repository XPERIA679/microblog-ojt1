<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/css/registration.css') }}">
    <title>Registration</title>
</head>


<body>


    <div class="container">
        <div class="box form-box">
            <form action="#">
                <header style="text-align: center">
                    <h2>Register</h2>
                </header>

                <p>Enter the following:</p>
                <div class="inputBox">
                    <input type="text" id="email" required="required">
                    <span>Email</span>
                </div>

                <div class="inputBox">
                    <input type="text" required="required">
                    <span>Username</span>
                </div>

                <div class="inputBox">
                    <input type="password" required="required">
                    <span>Password</span>
                </div>

                <div class="inputBox">
                    <input type="password" required="required">
                    <span>Confirm Password</span>
                </div><br>

                <hr style="border-top: 2px solid #000">

                <div>
                    <button class="btn">
                        Create Account
                    </button>
                </div>

                <div>
                    <a href="#">Already have an account? <br> Click here!</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
