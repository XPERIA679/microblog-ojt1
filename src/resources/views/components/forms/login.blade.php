<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/css/login.css') }}">
    <title>Login</title>
</head>


<body>
    <div class="container">
        <div class="box form-box">
            <form action="#">
                <header>
                    <h1>Sign In</h1>
                </header>
                <div class="inputBox">
                    <input type="text" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="password" required="required">
                    <span>Password</span>
                </div>

                <div>
                    <button class="btn">
                        Sign In
                    </button>
                    <button class="btn1">
                        Forgot password?
                    </button>
                </div>
                <div>
                    <p>Don't have an account?
                        <a href="#">
                            Sign Up
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
