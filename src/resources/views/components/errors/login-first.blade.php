@extends('layouts.app')

@section('title', 'Please Login First')

@section('content')

<div class="flex justify-center items-center h-left-height m-0">
    <div class="box-container text-center border bg-mywhite shadow-custom-shadowbox text-mydark p-5 rounded-lg border-solid border-mygray">
        <h1 class="text-2xl font-semibold text-mydark mb-5">Oops! Please Login First</h1><br>
        <div>
            <p class="text-base text-mydark mx-0 my-2.5">To do that, you need to be logged in.</p>
            <p class="text-base text-mydark mx-0 my-2.5">Please <a href="/signin" class="text-blue-600 underline">Login</a> or <a href="/signup" class="text-blue-600 underline">Create an account</a> if you dont have one.</p><br>
            <p class="text-base text-mydark mx-0 my-2.5"><a href="javascript:history.back()" class="text-blue-600 underline">Go back</a></p>
        </div>
    </div>

</div>

@endsection
