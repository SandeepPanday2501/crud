<?php

namespace App\Http\Controllers;

use App\Models\users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    public function registeruser(Request $req)
    {

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        users::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);
        return redirect()->route('login');
    }

    public function loginuser(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($req->only('email', 'password'))) {
            return redirect()->route('dashboard');

        } else {

            return back()->with('fail', 'User Not Found!');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}