<?php

namespace App\Http\Controllers\middleware;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class middlewareController extends Controller
{
    public function index()
    {
        return view('middleware.index ');
    }

    public function about()
    {
        return ('Ini adalah About');
    }

    public function product()
    {
        return ('Ini adalah Product');
    }

    public function cart()
    {
        return ('Ini adalah Cart');
    }

    public function order()
    {
        return ('Toko Buka, jadi silahkan Order');
    }

    public function cektanggal()
    {

    }
}
