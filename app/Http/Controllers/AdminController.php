<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login_for_admin()
    {
        return view('admin.login');
    }
    public function change_admin_information()
    {
        return view('changeAdmin.login');
    }
    public function orders()
    {
        return view('admin.orders');
    }
    public function create_prodact()
    {
        return view('admin.createProdact');
    }
}
