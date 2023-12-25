<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function login_view() {
        if (Auth::check()) {
            //Login Success
            return redirect('/dashboard');
        }

        return view("front.main", [
            'page' => "Login",
        ]);
    }

    public function login_auth(Request $request) {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string',
        ];

        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];


        $remember = $request->remember ? true : false ;

        Auth::attempt($data, $remember);
 
        if (Auth::check()) {
            //Login Success
            User::where('id_user',Auth::user()->id)->update(['lastlog' => \Carbon\Carbon::now()]);
            return redirect('dashboard');
        }
        else {
            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
