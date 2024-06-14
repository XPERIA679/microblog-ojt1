<header class="bg-mydark text-white p-2 flex justify-between items-center z-1000 top-0 left-0 w-full fixed">
    <a href="/posts-page"><img src="assets/images/logo.png" alt="Logo" class="shrink-0 justify-center items-center max-w-[100px] h-[60px] pl-8 mr-auto py-2"></a>

    <div class="search-bar-container relative ml-0.5">
        <div class="search-container bg-mywhite rounded-3xl px-5 py-1 flex items-center relative transition-transform duration-300 ease-in-out">
            <i class="uil uil-search"></i>
            <input type="search" placeholder="Search..." id="search-bar" onkeyup="filterUsernames()" class="bg-transparent w-60 text-center h-6 text-xs text-mydark outline-none focus:scale-105">
            <div id="dropdown" class="absolute bg-mywhite top-full left-0 w-full border h-10 rounded-custom max-h-48 overflow-y-auto text-xs shadow-custom-boxshadow z-1000 pt-0.5 pl-2.5 cursor-pointer text-mydark hover:bg-mycream hidden"></div>
        </div>
    </div>

    <ul>
        <li class="relative pr-8">
            <div id="profile-image-container" class="profile-image-container overflow-hidden shadow-custom-boxshadow cursor-pointer">
                <img src="profile.jpg" alt="Profile Picture" class="w-10 h-10 rounded-b-half border-2 border-solid border-mywhite object-cover">
            </div>

            <div id="dropdown-menu" class="dropdown-menu hidden absolute right-0 mt-1 mr-2 w-24 bg-mywhite rounded-xl shadow-lg z-10 text-center">
                <ul>
                    <li class="p-0.5 flex items-center justify-center h-8 text-mydark text-xs bg-mywhite hover:bg-mycream cursor-pointer rounded-md" id="logout-button">Log Out</li>
                </ul>
            </div>
            <form id="logout-form" action=" {{ route('logout') }} " method="GET" class="hidden"></form>
        </li>
    </ul>
</header>

<x-modals.logout />
