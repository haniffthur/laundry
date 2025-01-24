<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            switch ($user->role) {
                case 'admin':
                    return redirect()->intended('/admin');
                case 'kasir':
                    return redirect()->intended('/kasir');
                case 'owner':
                    return redirect()->intended('/owner');
            }
        }
        return redirect()->route('login')->with('gagal', 'Data tidak ditemukan');
    }
}
