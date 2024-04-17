<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
    <title>@yield('title')</title>
</head>

<body>

    <main class="flex justify-center items-center h-screen">
        @yield('content')
    </main>

    @include('layouts.scripts')
</body>

</html>
