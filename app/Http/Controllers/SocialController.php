<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    // Redirect to Facebook for authentication
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $socialUser = Socialite::driver('facebook')->user();
        $user = Auth::user();

        $user->update([
            'facebook_id' => $socialUser->id,
        ]);

        return redirect()->route('panel'); //add popup from alpinejs
    }

    public function redirectToInstagram()
    {
        return Socialite::driver('instagram')->redirect();
    }

    // Instagram callback
    public function handleInstagramCallback()
    {
        $socialUser = Socialite::driver('instagram')->user();
        $user = Auth::user();

        $user->update([
            'instagram_id' => $socialUser->id,
        ]);

        return redirect()->route('panel'); //add popup from alpinejs
    }
}
