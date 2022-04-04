<?php

namespace App\Http\Controllers;

use App\Models\auth_admin;
use Illuminate\Http\Request;

class userCheck extends Controller {
    public function register() {
        return view('register');
    }

    public function login() {

        return view('login');

    }

    public function save(Request $req) {

        $req->validate([
            'username' => 'required',
            'useremail' => 'required|email|unique:auth_admins',
            'userpass' => 'required|min:5|max:15',
        ]);

        //Insert Data

        $admin = new auth_admin;

        $admin->name = $req->username;
        $admin->useremail = $req->useremail;
        $admin->address = $req->useradd;
        $admin->password = $req->userpass;

        $save = $admin->save();

        if ($save) {
            return redirect('/');
        } else {
            return view('error');
        }

    }
    public function check(Request $req) {

        $req->validate([
            'user_email' => 'required|email',
            'user_password' => 'required|min:5|max:12',
        ]);

        $userInfo = auth_admin::where('useremail', '=', $req->user_email)->first();
        $userpass = auth_admin::where('password', '=', $req->user_password)->first();

        if (!$userInfo) {
            return back()->with('failem', 'You are not registered with this email.');
        } else {
            if ($userpass) {
                $req->session()->put('LoggedUser', $userInfo->id);
                return redirect('/home');
            } else {
                return back()->with('failpass', 'You have entered wrong password.');
            }

        }

    }

    public function profile() {
        $data = ['LoggerUserInfo' => auth_admin::where('id', '=', session('LoggedUser'))->first()];
        if (session()->has('LoggedUser')) {
            return view('profile', $data);
        } else {
            return redirect('/');
        }
    }

    public function join() {
        $data = ['LoggerUserInfo' => auth_admin::where('id', '=', session('LoggedUser'))->first()];
        if (session()->has('LoggedUser')) {
            return view('home', $data);
        } else {
            return redirect('/');
        }
    }

    public function logout() {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/');
        }

    }
}
