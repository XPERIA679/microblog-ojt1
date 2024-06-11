<div onclick="hidesignupForm()" id="signupForm"
    class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500">
    <div onclick="event.stopImmediatePropagation()"
        class="bg-mydark rounded-xl shadow-md px-12 py-2 flex justify-center items-center">
        <div id="signupForm"
            class="bg-mydark h-full w-full rounded-lg py-8 px-10 m-2 overflow-hidden transition-opacity duration-500">
            <x-logo.logo-form />
            <x-forms.signup />  
        </div>
    </div>
</div>

@if ($errors->has('username') || $errors->has('email') || $errors->has('password') || $errors->has('password_confirmation'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showsignupForm();
        });
    </script>
@endif
