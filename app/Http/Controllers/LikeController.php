<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class likeController extends Controller
{
    public function index()
    {
        return view('shop.like');
    }
}
