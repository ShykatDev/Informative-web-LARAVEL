<?php

use App\Http\Controllers\appController;
use App\Http\Controllers\userCheck;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/enroll', [appController::class, 'page5'])->name('404');

Route::get('/profile', [userCheck::class, 'profile']);
// Route::get('/set', [userCheck::class, 'join'])->name('join');
Route::get('/', [appController::class, 'page6'])->name('login');
Route::post('/log', [userCheck::class, 'check'])->name('check');
Route::get('/register', [appController::class, 'page7'])->name('register');
Route::post('/reg', [userCheck::class, 'save'])->name('save');

Route::get('/home', [appController::class, 'page1'])->name("home");
Route::get('/about', [appController::class, 'page2'])->name('about');
Route::get('/portfolio', [appController::class, 'page3'])->name('portfolio');
Route::get('/contact', [appController::class, 'page4'])->name('contact');

//transitions

Route::get('/style', [appController::class, 'css'])->name('css');
Route::get('/script', [appController::class, 'js'])->name('js');
Route::get('/react', [appController::class, 'react'])->name('react');
Route::get('/angular', [appController::class, 'angular'])->name('angular');
Route::get('/php', [appController::class, 'php'])->name('php');
Route::get('/git', [appController::class, 'git'])->name('git');
Route::get('/node', [appController::class, 'node'])->name('node');
Route::get('/laravel', [appController::class, 'laravel'])->name('laravel');

Route::get('/logout', [userCheck::class, 'logout'])->name('logout');

Route::post('/subscribe', [appController::class, 'emailsent'])->name('email');

//Cookie

Route::get('/set', 'App\Http\Controllers\cookies@setcookie')->name('setcookie');
Route::get('/getcookie', 'App\Http\Controllers\cookies@getcookie');

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('home');
});

?>
