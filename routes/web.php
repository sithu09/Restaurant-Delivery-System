<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend/navbar');
}); //Home

Route::get('/form', function () {
    return view('Frontend/order');
}); //Home
