<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    public function index()
    {
        return view('shop.cart');
    }
    public function add_cart(Request $request)
    {
        cart::create([
            'id_prodact'=>$request->id_prodact,
            'id_user'=>Auth::id(),
        ]);
        return ["type"=>"success"];
    }
}