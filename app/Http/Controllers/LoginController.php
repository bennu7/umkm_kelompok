<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            "title" => "login",
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            // "email" => "required|email:dns",
            "username" => "required|min:4",
            "password" => "required",
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        } else {
            return redirect('/login')->with('failed', 'Username atau Password salah');
            // dd("login gagal");
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
