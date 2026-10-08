<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaintingsController;
use Inertia\Inertia;

Route::get('/cuadros', function () {
    return inertia('Paintings');
});

Route::get('/', function () {
    return inertia('Welcome');
});

