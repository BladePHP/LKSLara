<?php

use App\Http\Controllers\keluhcontroller;
use App\Http\Controllers\logincontroller;
use Illuminate\Support\Facades\Route;

//login
Route::get('/', [logincontroller::class, 'index'])->name('login');
Route::get('/register', [logincontroller::class, 'register'])->name('register');

Route::post('/register', [logincontroller::class, 'registerpost'])->name('registpost');
Route::post('/', [logincontroller::class, 'loginpost'])->name('loginpost');

//keluh
Route::get('/siswa', [keluhcontroller::class, 'siswa'])->name('indexsiswa');
Route::get('/guru', [keluhcontroller::class, 'guru'])->name('indexguru');
Route::get('/create', [keluhcontroller::class, 'create'])->name('create');
Route::get('/edit/{siswa}', [keluhcontroller::class, 'edit'])->name('edit');
Route::get('/show/{siswa}', [keluhcontroller::class, 'show'])->name('show');
Route::get('/balasan/{siswa}', [keluhcontroller::class, 'balasan'])->name('balasan');
Route::get('/balas/{siswa}', [keluhcontroller::class, 'balas'])->name('balas');

Route::post('/create', [keluhcontroller::class, 'store'])->name('store');
Route::put('/edit/{siswa}', [keluhcontroller::class, 'update'])->name('update');
Route::delete('/siswa/{id}',[keluhcontroller::class, 'destroy'])->name('destroy');
Route::put('/balas/{siswa}', [keluhcontroller::class, 'balasput'])->name('balasput');