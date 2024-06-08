<button onclick="showfollowingModal()" id="followingModal" class="font-semibold text-center">
    <p class="text-mywhite cursor-pointer hover:text-mygray">{{ $user->followedUsers->where('status', 1)->count() }}</p>
    <span class="text-mycream cursor-pointer hover:text-mygray">Following</span>
</button>
