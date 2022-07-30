<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\prodact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdactController extends Controller
{
    public function index($id)
    {
        $prodact = prodact::where('id',$id)->first();
        return view('shop.prodact',["prodact" => $prodact]);
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
        $filePath = "/storage/".$request->file('file')->storeAs('prodacts', $fileName, 'public');
        prodact::create([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
            'image' => $filePath
        ]);
        return back()->withErrors(['msg'=>'prodact is added']);
    }
    public function create_order(Request $request)
    {
        order::create([
            'id_prodact' => $request->id_prodact,
            'id_user' => Auth::id()
        ]);
        return back()->withErrors(['msg'=>'The product will reach you soon']);
    }

}
