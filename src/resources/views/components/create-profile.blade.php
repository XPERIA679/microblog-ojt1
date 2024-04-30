@extends('layouts.app')

@section('title', 'Update Profile')

@section('content')
<div class="form-container">
    <div class="title">
        <h3 class="text-mywhite mix-blend-overlay">Profile Information</h3>
    </div>

    <form action="/update-profile" method="POST" id="signup-form">
        @csrf
        @method('POST')

        @php
        $keys = ['lotBlk', 'street', 'city', 'province', 'country', 'zip'];
        if (!is_null($profile->address)) {
            $values =  explode("‎", $profile->address);
            $addressInfo = array_combine($keys, $values);
        } else {
            $values = ['','','','','',''];
            $addressInfo = array_combine($keys, $values);
        }
        @endphp
        
        <div class="user-details">

            <div class="input-box">
                @if (!is_null($profile->first_name))
                <input type="text" name="first_name" placeholder="Juan" autocomplete="off" value='{{$profile->first_name}}'>
                @else
                <input type="text" name="first_name" placeholder="Juan" autocomplete="off">
                @endif
                <span>First Name</span>
            </div>

            <div class="input-box">
                @if (!is_null($profile->last_name))
                <input type="text" name="last_name" placeholder="Dela Cruz" autocomplete="off" value='{{$profile->last_name}}'>
                @else
                <input type="text" name="last_name" placeholder="Dela Cruz" autocomplete="off">
                @endif
                <span>Last Name</span>
            </div>

            <div class="input-box">
                @if (!is_null($profile->birth_date))
                <input type="date" name="birth_date" id="bday" value='{{($profile->birth_date)}}'>
                @else
                <input type="date" name="birth_date" id="bday">
                @endif
                <span>Birthday</span>
            </div>

            <div class="input-box">
                @if (!is_null($profile->contact))
                <input type="text" name="contact" placeholder="09123456789" pattern="[0-9]{11}" autocomplete="off" value='{{$profile->contact}}'>
                @else
                <input type="text" name="contact" placeholder="09123456789" pattern="[0-9]{11}" autocomplete="off">
                @endif
                <span>Phone Number</span>
            </div>

            <div class="user-details1">
                <div class="title">
                    <h3 class="text-mywhite mix-blend-overlay">Address Information</h3>
                </div>
                @foreach ($keys as $key)
                <div class="input-box1">
                    @if (!is_null($addressInfo[$key]))
                    <input type="text" name="{{$key}}" autocomplete="off" value='{{$addressInfo[$key]}}'>
                    @else
                    <input type="text" name="{{$key}}" autocomplete="off">
                    @endif
                    <span>{{ ucfirst($key) }}</span>
                </div>
                @endforeach

                <div>
                    <button class="items-center text-mydark bg-mycream box-border cursor-pointer inline-flex text-sm font-medium h-12 max-w-full overflow-hidden relative text-center w-auto px-6 py-0.5 rounded-3xl hover:bg-mygray text-mycream focus:border-2 border-solid border-mydark">Save</button>
                </div>

                <div>
                    <button class="items-center text-mycream bg-mydark box-border cursor-pointer inline-flex text-sm font-medium h-12 max-w-full overflow-hidden relative text-center w-auto px-6 py-0.5 rounded-3xl hover:bg-mygray text-mycream focus:border-2 border-solid border-mydark" href="">Skip</button>
                </div>
            </div>

        </div>
    </form>
</div>
@endsection
