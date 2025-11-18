<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('anggota', AnggotaController::class);
Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])->name('backend.beranda');
