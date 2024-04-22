@extends('layouts.app')

@section('title', 'Sign In')

@section('content')
    <div class="form-container">
        <div class="user-details">
            @auth
            <br>
            *Log out for testing purposes only*
            {{ auth()->user()->email}}
            <br>
            <form action="/logout" method="GET">
            </div>
            <button class="button">Log Out</button>
            </form>
        @else
        <div class="title">
            <h3>Sign In</h3>
        </div>
        <form action="/login" method='POST'>
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <input type="text" name='username' id="username" value="{{ old('username') }}" autocomplete="off" required="required">
                    <span>Username</span>
                    @error('username')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="password" type="password" name='password' id="password" required="required">
                    <span>Password</span>
                    @error('password')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <button class="button" href="submit">Sign In</button>
                    <hr class="w-2/5 m-2.5">
                    <button class="button1" href="registration">Create Account</button>
                </div>
            </div>
        </form>
      @endauth
    </div>
@endsection
