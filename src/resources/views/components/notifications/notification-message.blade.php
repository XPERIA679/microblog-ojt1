@if (session()->has('notifMessage'))
    <div id="notifMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-5     rounded relative shadow-lg animate-gradient">
        <div class="flex items-center">
            <x-svgs.success-icon />
            <span class="font-semibold">{{ session('notifMessage') }}</span>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                var notifMessage = document.getElementById('notifMessage');
                if (notifMessage) {
                    notifMessage.style.display = 'none';
                }
            }, 4000);
        });
    </script>
@endif