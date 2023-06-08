<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function index(Request $request)
    {
        // return 'ini adalah fungsi index dari login controller';
        return view('login.login');
    }

    public function logout(Request $req)
    {
        $req->session()->put('login', '0');
        $req->session()->put('id_user', 0);
        $req->session()->put(
            'email',
            ''
        );
        $req->session()->put('name', '');

        return redirect('/');
    }

    public function try_login(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        $user = DB::table('users')->where(['email' => $username])->first();

        if ($user == null) {
            return redirect()->back()->with('error', 'user tidak ditemukan');
        }

        if (Hash::check($password, $user->password) == false) {
            return redirect()->back()->with('success', 'password tidak cocok!');
        }

        $req->session()->put('login', '1');
        $req->session()->put('id_user', $user->id);
        $req->session()->put(
            'email',
            $user->email
        );
        $req->session()->put('name', $user->name);


        return redirect('/mahasiswa');
    }

    public function daftar()
    {
        return view('login.register');
    }

    public function simpan_register(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        DB::table('users')->insert([
            'email' => $username,
            'name' => $username,
            'password' => bcrypt($password),
        ]);

        return redirect('/')->with('success', 'Register berhasil');
    }
}
