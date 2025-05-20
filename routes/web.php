<?php

use Illuminate\Support\Facades\Route;
//import java.io;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com<h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('satu', function () {
	return view('pertama');
});
Route::get('pertemuan3', function () {
	return view('week3');
});

Route::get('pertemuan4', function () {
	return view('Pertemuan 4');
});

Route::get('pertemuan7-calc', function () {
	return view('js1');
});

Route::get('pertemuan7-valid', function () {
	return view('validasi1');
});

Route::get('tugas-linktree', function () {
	return view('linktreeLEGO');
});

Route::get('ets', function () {
	return view('ets');
});
