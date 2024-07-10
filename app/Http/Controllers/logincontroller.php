<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class logincontroller extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function register()
    {
        return view('login.register');
    }

    public function registerpost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('login')->with('success', 'Akun telah dibuat');

    }

    public function loginpost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email yang tidak ditemukan',
            'password.required' => 'Password tidak sesuai',
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($login)) {
            if (Auth::user()->role == 'Guru') {
                return redirect()->route('indexguru');
            } 
            elseif (Auth::user()->role == 'Siswa') {
                return redirect()->route('indexsiswa');
            }
        } else {
            return redirect('')->withErrors('Terjadi Kesalahan Saat Login');
        }
        

    }
}
