<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);
Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');
