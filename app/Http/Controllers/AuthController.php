<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function Admin()
    {
        return view('admin');
    }

    public function Admin_Login(Request $request)
    {
        $datas = Validator::make($request->all(), [
            'email' => 'required|email',
            'pass' => 'required',
        ]); 

        if ($datas->fails()){
            return redirect(url('/admin'))->with('error', 'harap isi form semuanya');
        }

        $user = User::where('email', $request->email)->where('password', $request->pass)->first();
        if (!$user) {
            return redirect(url('/admin'))->with('error', 'data admin tidak ada');
        } else {
            Session::put('auth_login', $user);
            return redirect(url('/dashboard'))->with('success', 'berhasil login'); 
        }
    }

    public function Logout()
    {
        Session::forget('auth_login');
        return redirect(url('/'))->with('success', 'berhasil logout'); 
    }
}


