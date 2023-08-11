<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Santri;
use App\Models\User;
class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('layout.login');
    }

    public function postLogin(Request $request)
    {
        //dd($request->all());
        if(Auth::guard('santri')->attempt($request->only('nik','password'))){
            return redirect('/dashboard');
        }elseif(Auth::guard('user')->attempt($request->only('nik','password'))){
            return redirect('/dashboard');
        }
        return redirect('/')->with('error', 'Masukan nik dan password yang valid!');
    }
    public function Logout(Request $request)
    {
        if(Auth::guard('santri')->check()){
            Auth::guard('santri')->logout();
        }elseif(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
        return redirect('/');
    } 
}
