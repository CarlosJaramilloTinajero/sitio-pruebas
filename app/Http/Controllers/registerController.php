<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{

    public function registerView()
    {
        return view('frontend.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password-confirm' => 'required|same:password',
        ]);

        // dd($request->status);

        $user = new User();


        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = encrypt($request->password);

        if ($request->status == null) {
            $user->status = 0;
        } else if ($request->status == "on") {
            $user->status = 1;
        }

        $user->save();

        return redirect(route('inicio'));
    }
}
