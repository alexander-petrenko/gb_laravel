<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function facebookAuth()
    {
        return Socialite::with('facebook')->redirect();
    }

    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        dump($user);
    }
}
