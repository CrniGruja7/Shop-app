<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getProductFromCart(){
        $cart = Cart::where('user_id', )->get();
    }
}
