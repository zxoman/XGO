<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\prodact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login_for_admin_page()
    {
        return view('admin.login');
    }
    public function login_for_admin(Request $request)
    {
        $request->validate([
            "username" => "required",
            "password" => "required"
        ]);
        echo $request->username,"  ",$request->password;
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password, 'abilities' => 'admin'])) {
            return redirect()->route('home');
        }else{
            return back()->withErrors(['msg' => 'informations Is Not Correct']);
        }
    }
    public function change_admin_information_Page()
    {
        return view('admin.changeAdmin');
    }
    public function orders()
    {
        $orders = order::all();
        $data = [];
        foreach ($orders as $order) {
            $prodact = prodact::where('id',$order['id_prodact'])->first();
            $user = User::where('id',$order['id_user'])->first();
            $data[] = ['user' => $user, 'prodact' => $prodact, 'date' => $order['created_at']];
        }
        return view('admin.orders',["orders" => $data]);
    }
    public function create_prodact()
    {
        return view('admin.createProdact');
    }
}
