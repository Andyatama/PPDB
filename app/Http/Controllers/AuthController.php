<?php

namespace App\Http\Controllers;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function register()
    {
        $jurusan = Jurusan::all();

        return view('Auth.register' ,compact('jurusan'));
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function postregister(Request $request)
    {
        if(Auth::attempt($request->only('nama','email','password','jurusan_id'))){
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}