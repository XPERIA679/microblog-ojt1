<form class="grid grid-cols-1 gap-6 mt-12" method="POST" action=" {{ route('login') }}">
    @csrf

    @if($errors->has('loginUsername'))
        @error('loginUsername')
            <div class="peer h-10 w-full bg-mydark border-b border-mywhite text-red-500 placeholder-transparent focus:outline-none focus:border-mycream">
                {{ $message }}
            </div>
        @enderror
    @elseif($errors->has('loginPassword'))
        @error('loginPassword')
            <div class="peer h-10 w-full bg-mydark border-b border-mywhite text-red-500 placeholder-transparent focus:outline-none focus:border-mycream">
                {{ $message }}
            </div>
        @enderror
    @elseif($errors->has('loginUsername') && $errors->has('loginPassword'))
        @error('loginPassword')
            <div class="peer h-10 w-full bg-mydark border-b border-mywhite text-red-500 placeholder-transparent focus:outline-none focus:border-mycream">
                {{ $message }}
            </div>
        @enderror
    @endif

    <div class="relative my-3">
        <input name="loginUsername" value="{{ old('loginUsername') }}" type="text" maxlength="20"
            class="peer h-10 w-full bg-mydark border-b border-mywhite text-mycream placeholder-transparent focus:outline-none focus:border-mycream"
            placeholder="Username" autocomplete="off" />
        <label for="loginUsername"
            class="absolute left-0 -top-3.5 text-mycream text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-mywhite peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-mycream peer-focus:text-sm">
            Username
        </label>
    </div>

    <div class="relative my-3">
        <input type="password" name="loginPassword"
            class="peer h-10 w-full bg-mydark border-b border-mywhite text-mycream placeholder-transparent focus:outline-none focus:border-mycream"
            placeholder="Password" autocomplete="off" />
        <label for="loginPassword"
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
