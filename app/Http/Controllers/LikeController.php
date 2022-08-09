<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\like;
use App\Models\prodact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class likeController extends Controller
{
    public function index()
    {
        $likes = like::where("id_user",Auth::id())->get();
        $likes_prodacts_id = [];
        foreach ($likes as $item) {
            $likes_prodacts_id[] = $item->id_prodact;
        }
        $likes_prodacts = prodact::whereIn('id', $likes_prodacts_id)->get();
        $cart = cart::where("id_user",Auth::id())->get();
        $cart_prodacts = [];
        foreach ($cart as $item) {
            $cart_prodacts[] = $item->id_prodact;
        }
        return view('shop.like',['likes_prodacts' => $likes_prodacts,'cart_prodacts' => $cart_prodacts]);
    }
    public function add_like(Request $request)
    {
        like::create([
            'id_prodact' => $request->id_prodact,
            'id_user' => Auth::id()
        ]);
        return ["type" => "success"];
    }
    public function remove_like(Request $request)
    {
        like::where("id_prodact",$request->id_prodact)->where("id_user",Auth::id())->delete();
        return ["type" => "success"];
    }
}
