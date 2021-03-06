<?php

use App\Http\Controllers\IndexController;
use App\Http\Livewire\DefibMap;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);
Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');
