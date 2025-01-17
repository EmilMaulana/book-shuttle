<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;

Route::get('/', function () {
    return view('layouts.main');
})->name('index');


Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi');


Route::get('/dashboard', function () {
    return view('dashboard.index    ');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
