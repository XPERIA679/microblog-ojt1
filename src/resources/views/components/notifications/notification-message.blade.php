@if (session()->has('notifMessage'))
    <div id="notifMessage" class="fixed top-10 right-5 bg-mywhite text-mydark p-2 z-9999 rounded-md shadow-lg animate-gradient transition-opacity duration-500">
        <div class="flex items-center">
            <img src="assets/images/check.gif" class="h-12 w-12" alt="Check">
            <span class="font-semibold ml-2">{{ session('notifMessage') }}</span>
        </div>
    </div>
@endif
