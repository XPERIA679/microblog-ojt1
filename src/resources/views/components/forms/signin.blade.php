<form class="grid grid-cols-1 gap-6 mt-12" method="POST" action="/login">
    @csrf

    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <div class="relative my-3">
        <input name="username" value="{{ old('username') }}" type="text" maxlength="20"
            class="peer h-10 w-full bg-mydark border-b border-mywhite text-mycream placeholder-transparent focus:outline-none focus:border-mycream"
            placeholder="Username" autocomplete="off" />
        <label for="username"
            class="absolute left-0 -top-3.5 text-mycream text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-mywhite peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-mycream peer-focus:text-sm">
            Username
        </label>
    </div>

    <div class="relative my-3">
        <input type="password" name="password"
            class="peer h-10 w-full bg-mydark border-b border-mywhite text-mycream placeholder-transparent focus:outline-none focus:border-mycream"
            placeholder="Password" autocomplete="off" />
        <label for="password"
            class="absolute left-0 -top-3.5 text-mycream text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-mywhite peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-mycream peer-focus:text-sm">
            Password
        </label>
    </div>
    <div class="mt-12 justify-center flex">
        <button href="submit">
        <x-svgs.signin-icon />
        </button>
    </div>
</form>
