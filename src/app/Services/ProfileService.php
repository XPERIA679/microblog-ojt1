<?php

namespace App\Services;

use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateProfileRequest;

class ProfileService
{
    /**
    * Update the user's profile.
    */
    public function update(UpdateProfileRequest $request): RedirectResponse
    {   
        
        if ($request->hasfile('profile_picture')) {
            $file = $request->file('profile_picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/images/';
            $file->move($path, $filename);
            $validatedData['profile_picture'] = $path . $filename;
        }

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
}
