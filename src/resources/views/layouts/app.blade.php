<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
    <title>@yield('title')</title>
</head>

<body>

        @yield('content')

    @include('layouts.scripts')
</body>

</html>
