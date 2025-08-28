<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pasingdata;
use App\Http\Controllers\akun;
use App\Http\Controllers\ProdukController;

// Route::get('/', function () {
//     return view('ikan');
// });

Route::get('/form',[pasingdata::class,'index']);
Route::get('/formproses',[pasingdata::class,'formproses']);

//Untuk register
Route::get('/', [akun::class, 'register'])->name('register');
Route::post('registerproses', [akun::class, 'registerproses'])->name('registerproses');

Route::get('/login', [akun::class, 'login'])->name('login');
Route::post('loginproses', [akun::class, 'loginproses'])->name('loginproses');

Route::get('home', [akun::class, 'index'])->name('home')->middleware('auth');
Route::get('logout', [akun::class, 'logout'])->name('logout')->middleware('auth');

Route::get('produk', [ProdukController::class, 'produk'])->name('produk')->middleware('auth');
Route::get('tambahproduk', [ProdukController::class, 'tambahproduk'])->name('tambahproduk')->middleware('auth');
Route::post('simpanproduk', [ProdukController::class, 'simpanproduk'])->name('simpanproduk')->middleware('auth');

Route::get('tampilproduk', [ProdukController::class, 'tampilproduk'])->name('tampilproduk')->middleware('auth');
