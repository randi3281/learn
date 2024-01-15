<?php

namespace App\Http\Controllers\oauth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class oauthController extends Controller
{
    public function index()
    {
        return view('oauth.index');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('google')->user();
        $email = $user->getEmail();
        return view('oauth.google-logged-in', ['user' => $user, 'email' => $email]);
    }
}
