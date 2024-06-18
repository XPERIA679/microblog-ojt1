<div class="w-auto h-auto rounded-full m-2">
    <form action="{{ route('profile.show.profile.page') }}" method="GET">
        <input name="userId" value="{{$user->id}}" hidden>
        <button class="font-semibold text-mywhite cursor-pointer">
            <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer" src="{{$user->profile->profile_picture}}" alt="moon">
        </button>
    </form>
</div>
