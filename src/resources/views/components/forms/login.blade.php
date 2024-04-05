<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>


<body>
    <div class="container">
        <div class="title">
            <h3>Sign In</h3>
        </div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <input type="text" autocomplete="off" required="required">
                    <span>Username</span>
                </div>

                <div class="input-box">
                    <input type="password" required="required">
                    <span>Password</span>
                </div>

                <div class="input-box">
                    <button class="button" href="home">Sign In</button>
                    <hr style="width:40%;margin:10px;" >
                    <button class="button1" href="registration">Don't have an account?</button>
                </div>

                <div class="input-box">

                </div>
            </div>
        </form>
    </div>
</body>

</html>
