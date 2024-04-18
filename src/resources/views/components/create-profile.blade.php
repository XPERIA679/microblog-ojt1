@extends('layouts.app')

@section('title', 'Create Profile')

@section('content')
    <div class="form-container">
        <div class="title">
            <h3 class="text-mywhite mix-blend-overlay">Profile Information</h3>
        </div>

        <form action="#" id="signup-form">
            <div class="user-details">

                <div class="input-box">
                    <input type="text" name="first_name" placeholder="Juan" autocomplete="off" >
                    <span>First Name</span>
                </div>

                <div class="input-box">
                    <input type="text" name="last_name" placeholder="Dela Cruz" autocomplete="off" >
                    <span>Last Name</span>
                </div>

                <div class="input-box">
                    <input type="date" name="birth_date" id="bday" >
                    <span>Birthday</span>
                </div>

                <div class="input-box">
                    <input type="text" name="contact" placeholder="09123456789" pattern="[0-9]{11}" autocomplete="off" >
                    <span>Phone Number</span>
                </div>

                <div class="user-details1">
                    <div class="title">
                        <h3 class="text-mywhite mix-blend-overlay">Address Information</h3>
                    </div>
                    <div class="input-box1">
                        <input type="text" name=""  autocomplete="off" >
                        <span>Lot & Blk #</span>
                    </div>

                    <div class="input-box1">
                        <input type="text" name="street"  autocomplete="off" >
                        <span>Street</span>
                    </div>

                    <div class="input-box1">
                        <input type="text" name="city"  autocomplete="off" >
                        <span>City</span>
                    </div>

                    <div class="input-box1">
                        <input type="text" name="province"  autocomplete="off" >
                        <span>Province</span>
                    </div>

                    <div class="input-box1">
                        <input type="text" name="country" autocomplete="off" >
                        <span>Country</span>
                    </div>

                    <div class="input-box1">
                        <input type="text" name="zip"  autocomplete="off" >
                        <span>Zip Code</span>
                    </div>

                    <div>
                        <button class="items-center text-mydark bg-mycream box-border cursor-pointer inline-flex text-sm font-medium h-12 max-w-full overflow-hidden relative text-center w-auto px-6 py-0.5 rounded-3xl hover:bg-mygray text-mycream focus:border-2 border-solid border-mydark" href="">Save</button>
                    </div>

                    <div>
                        <button class="items-center text-mycream bg-mydark box-border cursor-pointer inline-flex text-sm font-medium h-12 max-w-full overflow-hidden relative text-center w-auto px-6 py-0.5 rounded-3xl hover:bg-mygray text-mycream focus:border-2 border-solid border-mydark" href="">Skip</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
