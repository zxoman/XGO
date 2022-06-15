<?php

namespace App\Http\Controllers;

use App\Models\prodact;
use Illuminate\Http\Request;

class ProdactController extends Controller
{
    public function index($id)
    {
        return view('shop.prodact');
    }
    public function create_prodact(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'price' => 'required|max:10',
            'details' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('prodacts', $fileName, 'public');
        prodact::create([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
            'image' => $filePath
        ]);
        return back()->withErrors(['msg'=>'prodact is added']);
    }
}
