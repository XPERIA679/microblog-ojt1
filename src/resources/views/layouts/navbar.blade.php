<header class="w-full bg-mydark py-2 fixed top-0 justify-center items-center border-solid border-t-0 border-2 border-mygray rounded-b-custom z-1000">
    <div class="container flex justify-between items-center">
        <a href="/search-page"><img src="assets/images/logo.png" alt="Homepage" class="flex-shrink-0 min-w-100 min-h-full h-10 mr-14 pl-8"></a>
        <div class="search-bar-container relative">
            <div class="search-bar bg-mywhite rounded-3xl px-5 py-1 flex items-center relative mr-70px transition-transform duration-300 ease-in-out">
                <i class="uil uil-search"></i>
                <input type="search" id="search-bar" placeholder="Search" onkeyup="filterUsernames()" class="bg-transparent w-60 text-center h-6 text-xs text-mydark outline-none focus:scale-105">
                <div id="dropdown" class="absolute bg-mywhite top-full left-0 w-full border h-10 rounded-custom max-h-48 overflow-y-auto text-xs shadow-custom-boxshadow z-1000 pt-1 pl-2.5 cursor-pointer text-mydark hover:bg-mycream hidden"></div>
            </div>
        </div>
        <div>
            <ul class="navigation">
                <li class="pr-4 relative">
                    <div id="profile-image-container" class="profile-image-container w-8 h-8 overflow-hidden border-2 border-mywhite rounded-full shadow-custom-boxshadow cursor-pointer mr-3.5">
                        <img src="" alt="profile-image" class="w-full h-full object-cover">
                    </div>
                    <div id="dropdown-menu" class="dropdown-menu hidden absolute right-0 mt-2 w-24 bg-mywhite rounded-xl shadow-lg z-10 text-center">
                        <ul>
                            <li class="p-0.5 flex items-center justify-center h-10 text-xs bg-mywhite hover:bg-mycream cursor-pointer rounded-md">Profile</li>
                            <li class="p-0.5 flex items-center justify-center h-10 text-xs bg-mywhite hover:bg-mycream cursor-pointer rounded-md" id="logout-button">Log Out</li>
                        </ul>
                    </div>
                    <form id="logout-form" action="/logout" method="GET" class="hidden"></form>
                </li>
            </ul>
        </div>
    </div>
</header>
