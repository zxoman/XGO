<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdactController extends Controller
{
    public function index($id)
    {
        return view('shop.prodact');
    }
}
