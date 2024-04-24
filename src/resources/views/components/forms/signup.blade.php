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
                    <input name="email" placeholder="example@gmail.com" autocomplete="off" >
                    <span>Email</span>
                    @error('email')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="text" name="username" placeholder="juandelacruz" autocomplete="off" >
                    <span>Username</span>
                    @error('username')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="password" name="password" >
                    <span>Password</span>
                    @error('password')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="password" name="password_confirmation" >
                    <span>Confirm Password</span>
                    @error('password_confirmation')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <button class="items-center text-mydark bg-mycream box-border cursor-pointer inline-flex text-sm font-medium h-12 max-w-full overflow-hidden relative text-center w-auto px-6 py-0.5 rounded-3xl hover:bg-mygray text-mycream focus:border-2 border-solid border-mydark" href="signin">Create Account</button>
                    <hr class="w-3/5 m-2.5">
                    <button class="items-center text-mycream bg-mydark box-border cursor-pointer inline-flex text-sm font-medium h-12 max-w-full overflow-hidden relative text-center w-auto px-6 py-0.5 rounded-3xl hover:bg-mygray text-mycream focus:border-2 border-solid border-mydark" href="signin">Already have an account?</button>
                </div>
            </div>
        </form>
    </div>
@endsection
