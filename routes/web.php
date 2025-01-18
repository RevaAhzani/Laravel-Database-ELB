<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return redirect()->route('home');
});

Route::get('/datasiswa', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{id}', [HomeController::class, 'show'])->name('detail');

Route::get('/create', [HomeController::class, 'create'])->name('create');
Route::post('/store', [HomeController::class, 'store'])->name('store');

Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [HomeController::class, 'update'])->name('update');

Route::get('/delete/{id}', [HomeController::class, 'destroy'])->name('delete');
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
