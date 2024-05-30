@extends('layouts.app')

@section('title', 'Microblog')

@section('content')

    <div class="bg-mycream bg-opacity-0 relative w-full h-full justify-center items-center transition-opacity duration-500">
        <main class="grid lg:grid-cols-2 gap-6 mb-12 px-3 mx-3 justify-center item-center">
            <x-modals.signin />
            <x-modals.signup />
            <x-logo.logo />
            <x-sections.welcome />
        </main>
        <x-sections.footer />
    </div>
    
@endsection
