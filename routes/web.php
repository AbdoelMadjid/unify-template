<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Include Unify routes
require __DIR__ . '/main.php';
