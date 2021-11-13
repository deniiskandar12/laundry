<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showLogin()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $user = User::where([['username', $request->post('username')], ['password', $request->post('password')]])->first();
        if ($user === null) {
            return back()->with('error', 'Login gagal');
        } else {
            return redirect('admin/dashboard')->withSuccess('Login Berhasil');
        }
    }


    function showRegister()
    {
        return view('auth.register');
    }

    function register(Request $request)
    {
        $data = $request->all();
        User::create([
            'nama' => $data['nama'],
            'username' => $data['username'],
            'password' => $data['password'],
            'role' => 'user'
        ]);

        return redirect("login")->withSuccess('Register Berhasil');
    }
}
