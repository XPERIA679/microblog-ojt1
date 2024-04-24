@extends('layouts.app')

@section('title', 'Sign In')

@section('content')
    <div class="form-container1">
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
            <h3 class="text-mywhite mix-blend-overlay">Sign In</h3>
        </div>
        <form action="/login" method='POST'>
            @csrf
            <div class="user-details2">
                <div class="input-box2">
                    <input type="text" name='username' id="username" value="{{ old('username') }}" autocomplete="off">
                    <span>Username</span>
                    @error('username')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box2">
                    <input type="password" name='password'>
                    <span>Password</span>
                    @error('password')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box2">
                    <button class="items-center text-mydark bg-mycream box-border cursor-pointer inline-flex text-sm font-medium h-12 max-w-full overflow-hidden relative text-center w-auto px-6 py-0.5 rounded-3xl hover:bg-mygray text-mycream focus:border-2 border-solid border-mydark" href="submit">Sign In</button>
                    <hr class="w-2/5 m-2.5">
                    <button class="items-center text-mycream bg-mydark box-border cursor-pointer inline-flex text-sm font-medium h-12 max-w-full overflow-hidden relative text-center w-auto px-6 py-0.5 rounded-3xl hover:bg-mygray text-mycream focus:border-2 border-solid border-mydark" href="registration">Create Account</button>
                </div>
            </div>
        </form>
      @endauth
    </div>
@endsection
