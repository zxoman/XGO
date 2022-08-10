<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\like;
use App\Models\prodact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $prodacts = prodact::where('name', 'like', '%' . $query . '%')->get();
        $cart = cart::where("id_user",Auth::id())->get();
        $cart_prodacts = [];
        foreach ($cart as $item) {
            $cart_prodacts[] = $item->id_prodact;
        }
        // check prodacts added in like
        $likes = like::where("id_user",Auth::id())->get();
        $likes_prodacts = [];
        foreach ($likes as $item) {
            $likes_prodacts[] = $item->id_prodact;
        }
        return view('shop.search', ['prodacts' => $prodacts,'cart_prodacts' => $cart_prodacts,'likes_prodacts' => $likes_prodacts]);
    }
}
