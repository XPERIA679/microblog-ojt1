<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo.png">
</head>

<body>

        @yield('content')

    @include('layouts.scripts')
</body>

</html>
