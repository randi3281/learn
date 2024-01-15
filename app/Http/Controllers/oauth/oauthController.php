<?php

namespace App\Http\Controllers\oauth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class oauthController extends Controller
{
    public function index()
    {
        return view('oauth.index');
    }
}
