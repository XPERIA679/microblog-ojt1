<?php

namespace App\Services;

use App\Models\Profile;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateProfileRequest;

class ProfileService
{
    /**
    * Update the user's profile.
    */
    public function update(UpdateProfileRequest $request): RedirectResponse
    {       
        $validatedData = $request->validated();
        
        $addressComponents = [
            trim($validatedData['lotBlk']), trim($validatedData['street']),
            trim($validatedData['city']), trim($validatedData['province']),
            trim($validatedData['country']), trim($validatedData['zip'])
        ];

        $validatedData['address'] = implode(" ‎", $addressComponents);

        $profile = Profile::where('user_id', auth()->id())->firstOrFail();        
        $profile->update($validatedData);

        return redirect('/'); 
    }   

    /**
     * Fetch the profile to be edited.
     * returns a view with the profile.
     */
    public function showUpdateProfile(): View
    {
        return view('components.create-profile', ['profile' => auth()->user()->profile()->firstOrFail()]);
    }
}
