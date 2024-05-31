<form class="grid grid-cols-1 gap-6 mt-12" method="POST" action="/register">
    @csrf

    <div class="relative my-1">
        <input name="username" type="text" maxlength="20"
            class="peer h-10 w-full bg-mydark border-b border-mywhite text-mycream placeholder-transparent focus:outline-none focus:border-mycream"
            placeholder="Username" autocomplete="off" />
        <label for="username"
            class="absolute left-0 -top-3.5 text-mycream text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-mywhite peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-mycream peer-focus:text-sm">
            Username
        </label>
        @error('username')
            @foreach($errors->get('username') as $error)
                <div style="color: red;">{{ $error }}</div>
            @endforeach
        @enderror
    </div>
   
    <div class="relative my-1">
        <input name="email" type="email" maxlength="30"
            class="peer h-10 w-full bg-mydark border-b border-mywhite text-mycream placeholder-transparent focus:outline-none focus:border-mycream"
            placeholder="Email" autocomplete="off" />
        <label for="email"
            class="absolute left-0 -top-3.5 text-mycream text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-mywhite peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-mycream peer-focus:text-sm">
            Email
        </label>
        @error('email')
            @foreach($errors->get('email') as $error)
                <div style="color: red;">{{ $error }}</div>
            @endforeach
        @enderror
    </div>

    <div class="relative my-1">
        <input type="password" name="password"
            class="peer h-10 w-full bg-mydark border-b border-mywhite text-mycream placeholder-transparent focus:outline-none focus:border-mycream"
            placeholder="Password" autocomplete="off" />
        <label for="password"
            class="absolute left-0 -top-3.5 text-mycream text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-mywhite peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-mycream peer-focus:text-sm">
            Password
        </label>
        @error('password')
            @foreach($errors->get('password') as $error)
                <div style="color: red;">{{ $error }}</div>
            @endforeach
        @enderror
    </div>

    <div class="relative my-1">
        <input type="password" name="password_confirmation"
            class="peer h-10 w-full bg-mydark border-b border-mywhite text-mycream placeholder-transparent focus:outline-none focus:border-mycream"
            placeholder="Password" autocomplete="off" />
        <label for="password_confirmation"
            class="absolute left-0 -top-3.5 text-mycream text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-mywhite peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-mycream peer-focus:text-sm">
            Confirm Password
        </label>
        @error('password_confirmation')
            @foreach($errors->get('password_confirmation') as $error)
                <div style="color: red;">{{ $error }}</div>
            @endforeach
        @enderror
    </div>

    <div class="mt-6 justify-center flex">
        <button href="submit">
            <x-svgs.signup-icon />
        </button>
    </div>
</form>
