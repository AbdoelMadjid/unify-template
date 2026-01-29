<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('unify.intro');

// Include Unify routes
require __DIR__ . '/main.php';
