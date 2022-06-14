<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function index()
    {
        return view('auth.auth');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }else{
            return back()->withErrors(['msg' => 'informations Is Not Correct']);
        }
    }

    public function signup(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8',
            'address' => 'required',
            'phone' => 'required',
            'name' => 'required',
        ]);
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'abilities' => 'client'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }
    }
}
