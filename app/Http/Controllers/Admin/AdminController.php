<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    // public function login()
    // {
    //     return view('admin.login');
    // }

    // public function loginAdmin(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...
    //         return redirect()->intended('admin');
    //     }
    // }

    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('login');
    // }
}
