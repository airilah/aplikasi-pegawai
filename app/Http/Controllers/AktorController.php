<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AktorController extends Controller
{
    public function login()
    {
        return view('login', [
            'title' => 'login',
        ]);
    }

    public function masuk(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'email wajib diisi',
                'password.required' => 'password wajib diisi',
            ]
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $role = Auth::user()->role;

            if ($role == 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/');
            }
        } else {
            return back()->with('loginError', 'Login Gagal, Silahkan Masukkan Username dan Password yang Benar! ');
        }

    }

    public function daftar()
    {
        return view('daftar', [
            'title' => 'daftar',
        ]);
    }

    public function tambah_user(Request $request)
    {
        $user=new user;
        $user->nama=$request->nama;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->role=$request->role;
        $user->save();

        return redirect('/login')->with("tambah_user","Daftar Berhasil, Silahkan Login!");
    }


    public function lupa()
    {
        return view('lupa', [
            'title' => 'lupa password',
        ]);
    }

    public function pw_baru(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::where('nama', $request->input('nama'))->where('email', $request->input('email'))->first();

        if ($user) {
            $user->password = Hash::make($request->input('password'));
            $user->save();

            return back()->with('success', 'Password berhasil diubah!.');
        } else {
            return back()->withErrors(['credentials' => 'Name or Email is incorrect.'])->withInput();
        }
    }

    // admin


    public function daftar_profil()
    {

        return view('admin/profil', [
            'title' => 'Profil akun pegawai',
            'user' => User::all(),
        ]);
    }


    public function profil_admin()
    {
        return view('admin/profil_admin', [
            'title' => 'Update user',
            'user'=> User::all(),
        ]);

    }

    public function tambah_profil(Request $request)
    {
        $user=new user;
        $user->nama=$request->nama;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->role=$request->role;
        $user->save();

        return redirect('/daftar_profil')->with("tambah_profil","Profil Berhasil ditambah!");
    }

    public function delete_profil($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with("delete_profil","Profil Berhasil dihapus");
    }

    public function edit_admin(Request $request)
    {
        $user= User::find($request->id);
        $user->nama=$request->nama;
        $user->email=$request->email;
        $user->save();

        return redirect('/profil_admin')->with("edit_akun","Berhasil Diupdate!");
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
