<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', data: ['nama' => 'Akmal Muhammad Akbar', 'nim' => 'G.211.23.0050']);
});
