<div id="logout-modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center hidden items-center z-9999">
    <div class="bg-mycream p-6 rounded-20px shadow-lg text-center max-w-lg max-h-[calc(100vh-50px)] overflow-y-auto">
        <p class="mb-4 text-mydark">Are you sure you want to logout?</p>
        <div class="flex justify-center space-x-4">
            <button id="confirm-logout" class="flex justify-center font-medium text-base items-center bg-mydark text-mycream hover:bg-mygray hover:text-mydark rounded-lg p-3 transition-all">OK</button>
            <button id="cancel-logout" class="flex justify-center font-medium text-base items-center bg-mydark text-mycream hover:bg-mygray hover:text-mydark rounded-lg p-3 transition-all">Cancel</button>
        </div>
    </div>
</div>

<script src="{{ asset('js/logoutModal.js') }}"></script>
