<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/lapor', [LaporBanjirController::class, 'create'])->name('lapor.create');
Route::post('/lapor', [LaporBanjirController::class, 'store'])->name('lapor.store');
Route::get('/lapor/konfirmasi', [LaporBanjirController::class, 'konfirmasi'])->name('lapor.konfirmasi');
Route::get('/lapor/daftar', [LaporBanjirController::class, 'index'])->name('lapor.index');

use App\Http\Controllers\BukuController;

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');