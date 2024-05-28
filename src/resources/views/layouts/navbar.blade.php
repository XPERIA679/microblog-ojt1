<header class="bg-mydark text-white p-2.5 flex justify-between items-center h-50px z-1000 top-0 rounded-br-20px rounded-bl-20px border-t-0 border-2 border-solid border-mygray">
    <a href=""><img src="assets/images/logo.png" alt="Logo" class="shrink-0 justify-center items-center fixed max-w-[100px] min-w-[full] min-h-[full] h-[50px] mr-auto py-2 top-0"></a>

    <div class="search-bar-container relative ml-10">
        <div class="search-container; bg-mywhite rounded-3xl px-5 py-1 flex items-center relative transition-transform duration-300 ease-in-out">
            <!-- Search bar in the middle -->
            <i class="uil uil-search"></i>
            <input type="search" placeholder="Search..." id="search-bar" onkeyup="filterUsernames()" class="bg-transparent w-60 text-center h-6 text-xs text-mydark outline-none focus:scale-105">

            <div id="dropdown" class="absolute bg-mywhite top-full left-0 w-full border h-10 rounded-custom max-h-48 overflow-y-auto text-xs shadow-custom-boxshadow z-1000 pt-0.5 pl-2.5 cursor-pointer text-mydark hover:bg-mycream hidden"></div>
        </div>
    </div>

    <ul>
        <li class="relative">
            <div id="profile-image-container" class="profile-image-container overflow-hidden  shadow-custom-boxshadow cursor-pointer">
                <img src="profile.jpg" alt="Profile Picture" class="w-10 h-10 rounded-b-half border-2 border-solid border-mywhite object-cover">
            </div>

            <div id="dropdown-menu" class="dropdown-menu hidden absolute right-0 mt-1 w-24 bg-mywhite rounded-xl shadow-lg z-10 text-center">
                <ul>
                    <li class="p-0.5 flex items-center justify-center h-8 text-mydark text-xs bg-mywhite hover:bg-mycream cursor-pointer rounded-md">Profile</li>
                    <li class="p-0.5 flex items-center justify-center h-8 text-mydark text-xs bg-mywhite hover:bg-mycream cursor-pointer rounded-md" id="logout-button">Log Out</li>
                </ul>
            </div>
            <form id="logout-form" action="/logout" method="GET" class="hidden"></form>
        </li>
    </ul>
</header>
