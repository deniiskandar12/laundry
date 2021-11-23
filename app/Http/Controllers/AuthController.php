<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function doLogin(Request $request)
    {
        $user = User::where([['username', $request->post('username')], ['password', $request->post('password')]])->first();
        if ($user === null) {
            return back()->with('error', 'Login gagal');
        } else {
            session(['id' => $user->id]);
            session(['role' => $user->role]);
            if ($user->role == 'admin')
                return redirect('admin/data-pesanan')->withSuccess('Login Berhasil');
            else
                return redirect('user/dashboard')->withSuccess('Login Berhasil');
        }
    }

    function register(Request $request)
    {
        $data = $request->all();
        User::create([
            'nama' => $data['nama'],
            'username' => $data['username'],
            'password' => $data['password'],
            'no_hp' => $data['no_hp'],
            'role' => 'user'
        ]);

        return redirect("login")->withSuccess('Register Berhasil');
    }

    public function logout()
    {
        session(['id' => null]);
        return redirect("/");
    }
}
