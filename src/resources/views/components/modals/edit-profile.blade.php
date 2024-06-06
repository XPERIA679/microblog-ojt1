@php
    $profile = auth()->user()->profile;
    !is_null($profile->address) ? $values =  explode("‎", $profile->address) : $values = ['','','','','',''];
    $addressInfo = array_combine(['lotBlk', 'street', 'city', 'province', 'country', 'zip'], $values);
@endphp

<div onclick="hideProfile()" id="profile"
    class="fixed left-0 top-0 bg-mydark bg-opacity-50 w-full h-full justify-center items-center opacity-0 hidden transition-opacity duration-500 z-50">
    <div onclick="event.stopImmediatePropagation()" class="bg-mycream rounded-2xl shadow-md p-10 flex">
        <form id="profileForm" method="POST" action="{{ route('update-profile') }}">
        @csrf
        @method('PUT')
        <div class="flex p-0 bg-mycream">
            <div id="page1" class="bg-mycream mx-auto overflow-hidden transition-opacity duration-500">
                <h1 class="left-0 text-3xl font-bold text-mydark">
                    Profile Information
                </h1>
                <div class="grid grid-cols-2 gap-6 mt-8">
                    <div class="relative">
                        <input id="first_name" name="first_name" type="text"
                            class="peer h-10 w-full bg-mycream border-b border-mygray text-mydark placeholder-transparent focus:outline-none focus:border-mydark"
                            placeholder="First Name" autocomplete="off"
                            value="{{ $profile->first_name }}"/>
                        <label for="first_name"
                            class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                            First Name
                        </label>
                    </div>
                    <div class="relative">
                        <input id="lastname" type="text" name="last_name"
                            class="peer h-10 w-full bg-mycream border-b border-mygray text-mydark placeholder-transparent focus:outline-none focus:border-mydark"
                            placeholder="Last Name" autocomplete="off"
                            value="{{ $profile->last_name }}"/>
                        <label for="last_name"
                            class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                            Last Name
                        </label>
                    </div>
                    <div class="relative">
                        <input id="bday" type="date" name="birth_date"
                            class="peer h-10 w-full bg-mycream border-b border-mygray text-mydark placeholder-transparent focus:outline-none focus:border-mydark"
                            placeholder="Birthdate" autocomplete="off"
                            value="{{ $profile->birth_date }}"/>
                        <label for="birth_date"
                            class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                            Birthdate
                        </label>
                    </div>
                    <div class="relative">
                        <input id="contact" type="text" name="contact"
                            class="peer h-10 w-full bg-mycream border-b border-mygray text-mydark placeholder-transparent focus:outline-none focus:border-mydark"
                            placeholder="Phone Number" autocomplete="off"
                            value="{{ $profile->contact }}"/>
                        <label for="contact"
                            class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                            Phone Number
                        </label>
                    </div>
                </div>
                <div class="mt-12 justify-between flex">
                    <span onclick="hideProfile()"
                        class="justify-center items-center flex text-mydark bg-mywhite box-border cursor-pointer shadow-md text-sm font-medium h-12 max-w-full overflow-hidden text-center w-auto px-6 py-0.5 rounded-2xl hover:bg-mydark hover:text-mywhite border-mydark transition-all">
                        Cancel
                    </span>
                    <span onclick="nextPage()"
                        class="justify-center items-center flex text-mywhite bg-mydark box-border cursor-pointer shadow-md text-sm font-medium h-12 max-w-full overflow-hidden text-center w-auto px-8 py-0.5 rounded-2xl hover:bg-mywhite hover:text-mydark border-mydark transition-all">
                        Next
                    </span>
                </div>
            </div>
            <div id="page2" class="w-fit bg-mycream mx-auto overflow-hidden transition-opacity duration-300 hidden">
                <h1 class="left-0 text-3xl font-bold text-mydark">
                    Address Information
                </h1>
                <div class="grid grid-cols-3 mt-8 gap-6">
                    <div class="relative">
                        <input id="lotBlk" name="lotBlk" type="text"
                            class="peer h-10 w-full bg-mycream border-b border-mygray text-mydark placeholder-transparent focus:outline-none focus:border-mydark"
                            placeholder="Lot & Blk" autocomplete="off"
                            value="{{ $addressInfo['lotBlk'] }}"/>
                        <label for="lotBlk"
                            class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                            Lot & Blk
                        </label>
                    </div>
                    <div class="relative">
                        <input id="street" name="street" type="text"
                            class="peer h-10 w-full bg-mycream border-b border-mygray text-mydark placeholder-transparent focus:outline-none focus:border-mydark"
                            placeholder="Street" autocomplete="off"
                            value="{{ $addressInfo['street'] }}"/>
                        <label for="street"
                            class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                            Street
                        </label>
                    </div>
                    <div class="relative">
                        <input id="city" name="city" type="text"
                            class="peer h-10 w-full bg-mycream border-b border-mygray text-mydark placeholder-transparent focus:outline-none focus:border-mydark"
                            placeholder="City" autocomplete="off"
                            value="{{ $addressInfo['city'] }}"/>
                        <label for="city"
                            class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                            City
                        </label>
                    </div>
                    <div class="relative">
                        <input id="province" name="province" type="text"
                            class="peer h-10 w-full bg-mycream border-b border-mygray text-mydark placeholder-transparent focus:outline-none focus:border-mydark"
                            placeholder="Province" autocomplete="off"
                            value="{{ $addressInfo['province'] }}"/>
                        <label for="province"
                            class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                            Province
                        </label>
                    </div>
                    <div class="relative">
                        <input id="country" name="country" type="text"
                            class="peer h-10 w-full bg-mycream border-b border-mygray text-mydark placeholder-transparent focus:outline-none focus:border-mydark"
                            placeholder="Country" autocomplete="off"
                            value="{{ $addressInfo['country'] }}"/>
                        <label for="country"
                            class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                            Country
                        </label>
                    </div>
                    <div class="relative">
                        <input id="zip" name="zip" type="text"
                            class="peer h-10 w-full bg-mycream border-b border-mygray text-mydark placeholder-transparent focus:outline-none focus:border-mydark"
                            placeholder="Zip Code" autocomplete="off"
                            value="{{ $addressInfo['zip'] }}"/>
                        <label for="zip"
                            class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                            Zip Code
                        </label>
                    </div>
                </div>
                <div class="mt-12 justify-between flex">
                    <span onclick="prevPage()"
                        class="justify-center items-center flex text-mywhite bg-mydark box-border cursor-pointer shadow-md text-sm font-medium h-12 max-w-full overflow-hidden text-center w-auto px-8 py-0.5 rounded-2xl hover:bg-mywhite hover:text-mydark border-mydark transition-all">
                        Back
                    </span>
                    <button id="saveProfile"
                        class="justify-center items-center flex text-mydark bg-mywhite box-border cursor-pointer shadow-md text-sm font-medium h-12 max-w-full overflow-hidden text-center w-auto px-8 py-0.5 rounded-2xl hover:bg-mydark hover:text-mywhite border-mydark transition-all">
                        Save
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

