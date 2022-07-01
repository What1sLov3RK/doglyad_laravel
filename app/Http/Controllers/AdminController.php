<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
       $categories = Product::CATEGORIES;

       if (session()->has('user')) {
           return view('admin', ['categories' => $categories]);
       }

       return redirect('/admin');
    }

    public function login(Request $request)
    {
        if ($request->login == 'admin' && $request->password == 'admin') {
           session()->push('user', 'admin');
        }

        return redirect('/admin');
    }

    public function logout()
    {
        session()->forget('user');

        return redirect()->back();
    }
}
