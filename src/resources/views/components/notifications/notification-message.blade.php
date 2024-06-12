@if (session()->has('notifMessage'))
    <div id="notifMessage" class="fixed bottom-5 right-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-5 rounded shadow-lg animate-gradient transition-opacity duration-500">
        <div class="flex items-center">
            <x-svgs.success-icon />
            <span class="font-semibold ml-2">{{ session('notifMessage') }}</span>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                var notifMessage = document.getElementById('notifMessage');
                if (notifMessage) {
                    notifMessage.classList.add('opacity-0');
                    setTimeout(function () {
                        notifMessage.style.display = 'none';
                    }, 500); 
                }
            }, 4000);
        });
    </script>
@endif
