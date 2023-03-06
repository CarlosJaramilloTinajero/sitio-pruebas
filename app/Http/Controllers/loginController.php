<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            return redirect()->route('inicio.version', ['version' => 'v1']);
        }
        return redirect()->back()->with('error', 'Esas credenciales no coinciden');
    }
    public function logout()
    {
        session()->flush();
        return redirect()->back();
    }
}
