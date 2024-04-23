@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')
    <div class="form-container">
        <div class="title">
            <h3>Sign Up</h3>
        </div>

        <form action="/register" method="POST" id="signup-form">
            @csrf
            <div class="user-details">

                <div class="input-box">
                    <input type="email" name="email" placeholder="example@gmail.com" autocomplete="off" required>
                    <span>Email</span>
                    @error('email')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="text" name="username" placeholder="juandelacruz" autocomplete="off" required>
                    <span>Username</span>
                    @error('username')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="password" name="password" required>
                    <span>Password</span>
                    @error('password')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="password" name="password_confirmation" required>
                    <span>Confirm Password</span>
                    @error('password_confirmation')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
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
