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

    public function showUpdateProfile(): View
    {
        return view('components.create-profile', [
            'profile' => Profile::where('user_id', auth()->user()->id)->firstOrFail()
        ]);
    }
  
}
