<button onclick="showfollowerModal()" id="followerModal" class="font-semibold text-center">
    <p class="text-mywhite cursor-pointer hover:text-mygray">{{ $user->followers->count() }}</p>
    <span class="text-mycream cursor-pointer hover:text-mygray">Followers</span>
</button>
