<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\like;
use App\Models\prodact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    public function index()
    {
        $cart = cart::where("id_user", Auth::id())->get();
        $cart_prodacts_id = [];
        foreach ($cart as $item) {
            $cart_prodacts_id[] = $item->id_prodact;
        }
        $cart_prodacts = prodact::whereIn('id', $cart_prodacts_id)->get();
        // check prodacts added in like
        $likes = like::where("id_user", Auth::id())->get();
        $likes_prodacts = [];
        foreach ($likes as $item) {
            $likes_prodacts[] = $item->id_prodact;
        }
        return view('shop.cart', ['cart_prodacts' => $cart_prodacts, 'likes_prodacts' => $likes_prodacts]);
    }
    public function add_cart(Request $request)
    {
        cart::create([
            'id_prodact' => $request->id_prodact,
            'id_user' => Auth::id()
        ]);
        return ["type" => "success"];
    }
    public function remove_cart(Request $request)
    {
        cart::where("id_prodact", $request->id_prodact)->where("id_user", Auth::id())->delete();
        return ["type" => "success"];
    }
}
