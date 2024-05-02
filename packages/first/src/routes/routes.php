<?php

use Illuminate\Support\Facades\Route;
use Seyyed\First\controller\firstController;

Route::get('/firstRoute', [firstController::class, 'index'])->name('firstRoute');
Route::get('/firstRoute/create', [firstController::class, 'create'])->name('firstRoute/create');
