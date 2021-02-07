<?php

namespace App\Http\Controllers\ShoppingCart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    //
    public function index()
    {
        return view('shoppingCart.index');
    }
}
