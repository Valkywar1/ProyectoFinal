<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    // Retornar vista
    public function wishlist()
    {
        return view('wishlist');
    }
}
