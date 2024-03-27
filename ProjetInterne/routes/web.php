<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/singlearticle', function () {
    return view('singlearticle');
});
