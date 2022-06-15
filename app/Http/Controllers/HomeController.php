<?php

namespace App\Http\Controllers;

use App\Models\prodact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $prodacts = prodact::all();
        return view('shop.home',['prodacts' => $prodacts]);
    }
}
