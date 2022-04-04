<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class cookies extends Controller {

    public function setcookie() {

        if (session()->has('LoggedUser')) {
            $time_min = 60;
            $response = new Response('Set Cookie');
            $response->withCookie(cookie('name', 'your cookie is set', $time_min));
            return view('setcookie');
        } else {
            return redirect('/');
        }
    }

    public function getcookie(Request $req) {
        $value = $req->cookie('name');
        echo $value;
    }

}
