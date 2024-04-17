@extends('layouts.app')

@section('title', 'Sign In')

@section('content')
    <div class="form-container">
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
                    <hr class="w-2/5 m-2.5">
                    <button class="button1" href="registration">Create Account</button>
                </div>
            </div>
        </form>
    </div>
@endsection
