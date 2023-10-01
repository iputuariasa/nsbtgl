<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        // dd($request);
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
    
        // menggunakan COLLATION utf8mb4_bin pada Eloquent ORM
        $user = User::whereRaw('email COLLATE utf8mb4_bin = ?', [$credentials['email']])
                ->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::loginUsingId($user->id);
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('error', 'Login Gagal!');
    }

    public function logout(Request $request)
    {
        // dd(session('passwordChange') == true);
        auth()->logout();
        $request->session()->invalidate();
        
        return redirect('/login')->with("success", "Anda Berhasil Logout");
    }
}
