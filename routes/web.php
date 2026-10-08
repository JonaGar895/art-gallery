<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Jonathan',
        'frameworks' => ['Laravel', 'Vue', 'Inertia'],
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users');
});

Route::get('/cuadros', function () {
    return Inertia::render('Paintings');
});

Route::get('/setting', function () {
    return Inertia::render('Setting');
});