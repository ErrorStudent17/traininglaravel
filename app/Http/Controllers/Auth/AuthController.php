<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function prosesRegister(Request $req)
    {
        $data = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'foto_profil' => 'mimes:jpg,png'
        ]);

        if ($req->file('foto_profil')) {
            $path_foto_profile = $req->foto_profil->store('public/profil');
        } else {
            $path_foto_profile = "public/default.jpg";
        }

        $data['foto_profil'] = str_replace("public/profil", "", $path_foto_profile);

        User::create($data);

        return redirect('login')->with('success', 'Anda berhasil registrasi, Silahkan login !!!');
    }
}
