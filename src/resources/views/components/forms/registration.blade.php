<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/css/registration.css') }}">
    <title>Sign Up</title>
</head>


<body>


    <div class="container">
        <div class="title">
            <h3>Sign Up</h3>
        </div>

        <form action="#">
            <div class="user-details">

                <div class="input-box ">
                    <input type="text" placeholder="Juan" autocomplete="off" required="required">
                    <span>First Name</span>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Dela Cruz" autocomplete="off" required="required">
                    <span>Last Name</span>
                </div>

                <div class="input-box">
                    <input type="email" placeholder="example@gmail.com" autocomplete="off" required="required">
                    <span>Email address</span>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="juandelacruz" autocomplete="off" required="required">
                    <span>Username</span>
                </div>

                <div class="input-box">
                    <input type="tel" placeholder="09669513998" autocomplete="off" pattern="[0-9]{11}"
                        required="required">
                    <span>Phone Number</span>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="dd/mm/yyyy" onfocus="type='date'" onblur="type='text'"
                        required="required">
                    <span>Date of Birth</span>
                </div>

                <div class="input-box ">
                    <input type="text" placeholder="blk# & lot#, Street" autocomplete="off" required="required">
                    <span>Address</span>
                </div>

                <div class="input-box ">
                    <input type="text" placeholder="City" autocomplete="off" required="required">
                    <span>City</span>
                </div>

                <div class="input-box ">
                    <input type="text" placeholder="State/Province" autocomplete="off" required="required">
                    <span>State/Province</span>
                </div>

                <div class="input-box ">
                    <input type="text" placeholder="Country" autocomplete="off" required="required">
                    <span>Country</span>
                </div>

                <div class="input-box">
                    <input type="password" required="required">
                    <span>Password</span>
                </div>

                <div class="input-box ">
                    <input type="text" placeholder="ZIP/Postal Code" autocomplete="off" required="required">
                    <span>ZIP/Postal Code</span>
                </div>


                <div class="input-box">
                    <input type="password" required="required">
                    <span>Confirm Password</span>
                </div>

                <div class="input-box">
                    <button class="button1">Already have an account?</button>
                </div>

                <div class="input-box">
                    <button class="button">Create Account</button>
                </div>

            </div>
        </form>
    </div>
    </div>

</body>

</html>
