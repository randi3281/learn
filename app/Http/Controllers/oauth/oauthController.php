<?php

namespace App\Http\Controllers\oauth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\oauth\oauth;

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
        $oauth = oauth::all();
        foreach ($oauth as $o) {
            if ($o->email == $email) {
                return view('oauth.google-logged-in', ['user' => $user, 'email' => $email]);
            }
        }

        return view('oauth.index');
    }


}
