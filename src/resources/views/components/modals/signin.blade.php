<div onclick="hidesigninForm()" id="signinForm"
    class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500">
    <div onclick="event.stopImmediatePropagation()"
        class="bg-mydark rounded-xl shadow-md px-10 py-8 flex justify-center items-center">
        <div id="signinForm"
            class="bg-mydark h-full w-full rounded-lg p-12 m-2 overflow-hidden transition-opacity duration-500">
            <x-logo.logo-form />
            <x-forms.signin />
            <a class="mt-5 justify-center flex text-sm text-mygray hover:text-mywhite hover:shadow-lg font-semibold uppercase cursor-pointer">
                Forget password?
            </a>
        </div>
    </div>
</div>

@if (($errors->has('loginUsername') || $errors->has('loginPassword')))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showsigninForm();
        });
    </script>
@endif