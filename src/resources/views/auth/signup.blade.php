@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')
    <div class="form-container">
        <div class="title">
            <h3>Sign Up</h3>
        </div>

        <form action="#" id="signup-form">
            <div class="user-details">

                <div class="input-box">
                    <input type="email" name="email" placeholder="example@gmail.com" autocomplete="off" required>
                    <span>Email</span>
                </div>

                <div class="input-box">
                    <input type="text" name="username" placeholder="juandelacruz" autocomplete="off" required>
                    <span>Username</span>
                </div>

                <div class="input-box">
                    <input type="password" name="password" required>
                    <span>Password</span>
                </div>

                <div class="input-box">
                    <input type="password" required>
                    <span>Confirm Password</span>
                </div>

                <div class="input-box">
                    <button class="button" href="signin">Create Account</button>
                    <hr class="w-3/5 m-2.5">
                    <button class="button1" href="signin">Already have an account?</button>
                </div>

            </div>
        </form>
    </div>
@endsection
