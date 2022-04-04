<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Mail\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class appController extends Controller {
    public function page1() {
        return view('home');
    }
    public function page2() {
        return view('about');
    }
    public function page3() {
        return view('portfolio');
    }
    public function page4() {
        return view('contact');
    }
    public function page5() {
        return view('error');
    }
    public function page6() {
        return view('login');
    }
    public function page7() {
        return view('register');
    }
    public function css() {
        return view('subject/css');
    }
    public function js() {
        return view('subject/js');
    }
    public function react() {
        return view('subject/react');
    }
    public function node() {
        return view('subject/node');
    }
    public function php() {
        return view('subject/php');
    }
    public function laravel() {
        return view('subject/laravel');
    }
    public function git() {
        return view('subject/git');
    }
    public function angular() {
        return view('subject/angular');
    }

    

    public function emailsent() {
        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))->send(new Subscribe);

        return view('confirm');
    }

}

?>