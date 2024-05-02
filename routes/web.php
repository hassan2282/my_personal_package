<?php

use Illuminate\Support\Facades\Route;
use Seyyed\First\first;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', function () {
    return 'hi base route';
});
