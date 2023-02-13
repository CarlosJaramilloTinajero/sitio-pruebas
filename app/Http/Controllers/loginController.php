<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginView()
    {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        // dd(encrypt($request->password));

        if (Auth::attempt(["email" => $request->email, "password" => encrypt($request->password)])) {
            return view('frontend.inicio');
        }
        return redirect()->back()->with('error', 'Esas credenciales no coinciden');
    }
}
