<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalogue', function () {
    return view('catalogue');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/singlearticle', function () {
    return view('singlearticle');
});
