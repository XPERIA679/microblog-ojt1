@extends('layouts.app')

@section('title', 'Sign In')

@section('content')
    <div class="form-container1">
        <div class="title">
            <h3 class="text-mywhite mix-blend-overlay">Sign In</h3>
        </div>
        <form action="#">
            <div class="user-details2">
                <div class="input-box2">
                    <input type="text" autocomplete="off" required="required">
                    <span>Username</span>
                </div>

                <div class="input-box2">
                    <input type="password" required="required">
                    <span>Password</span>
                </div>

                <div class="input-box2">
                    <button class="items-center text-mydark bg-mycream box-border cursor-pointer inline-flex text-sm font-medium h-12 max-w-full overflow-hidden relative text-center w-auto px-6 py-0.5 rounded-3xl hover:bg-mygray text-mycream focus:border-2 border-solid border-mydark" href="home">Sign In</button>
                    <hr class="w-2/5 m-2.5">
                    <button class="items-center text-mycream bg-mydark box-border cursor-pointer inline-flex text-sm font-medium h-12 max-w-full overflow-hidden relative text-center w-auto px-6 py-0.5 rounded-3xl hover:bg-mygray text-mycream focus:border-2 border-solid border-mydark" href="registration">Create Account</button>
                </div>
            </div>
        </form>
    </div>
@endsection
