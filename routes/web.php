<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.master');
});


Route::get('/child', function () {
    return view('child.home');
});

Route::get('/about', function () {
    return view('child.about');
});


Route::get('/login', function () {
    return view('child.login');
});

