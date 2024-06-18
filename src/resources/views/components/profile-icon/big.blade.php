<div class="flex flex-col gap-1 text-center items-center">
    <form action="{{ route('profile.show.profile.page') }}" method="GET">
        <input name="userId" value="{{$user->id}}" hidden>
        <button class="font-semibold text-mywhite cursor-pointer">
            <img class="h-32 w-32 object-cover rounded-full shadow mb-4 cursor-pointer" src="{{$user->profile->profile_picture}}" alt="moon">
            {{ $user->username }}
        </button>
    </form>
</div>