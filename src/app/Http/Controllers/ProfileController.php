<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\ProfileService;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{   
    public $profileService;

    /** 
     * Create a new ProfileController instance.
     */
    public function __construct()
    {
        $this->profileService = new ProfileService;
    }
    
    /**
     * Calls the service that updates user's profile information.
     */
    public function update(UpdateProfileRequest $request): RedirectResponse
    {   
        $this->profileService->update($request);
        return redirect('/posts-page')->with('notifMessage', 'Profile Information Updated Successfully!'); 
    }    

     /**	
     * Displays the profile page of a user.	
     */	
    public function showProfilePage(Request $request): View	
    {   	
        return view('profile.index', 	
        [	
            "user" =>  User::where('id', $request->userId)->firstOrFail()	
        ]);	
    }
}
