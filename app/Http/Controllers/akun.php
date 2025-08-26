<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class Akun extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerproses(Request $request)
    {
        // 🔹 Validasi dulu sebelum insert
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:3|max:20|unique:users,username',
            'password' => 'required|min:6|confirmed',
            'role' => 'nullable|string'
        ]);

        // 🔹 Baru buat user jika validasi lolos
        User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role ?? 'user', // default "user" kalau kosong
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('/');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('login');
        }
    }

    public function loginproses(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect('home');
        } else {
            Session::flash('error', 'Username atau Password Salah');
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function index()
    {
        return view('home');
    }
}
