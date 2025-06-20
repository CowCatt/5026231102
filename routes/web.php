<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SembakoController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\easController;

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
    return view('welcome');
});

Route::get('frontend', function () {
    return view('frontend');
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

Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route sembakoDB
Route::get('/sembako', [sembakoController::class, 'index']);
Route::get('/sembako/tambah', [sembakoController::class, 'tambah']);
Route::post('/sembako/store', [sembakoController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/sembako/edit/{id}',[sembakoController::class, 'edit']);
Route::post('/sembako/update',[sembakoController::class, 'update']);
Route::get('/sembako/hapus/{id}', [sembakoController::class, 'hapus']);

Route::get('/sembako/cari', [sembakoController::class, 'cari']);

//route Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::post('/karyawan/update',[KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);


Route::get('/pagecounter', [CounterController::class, 'index']);

//eas
Route::get('/eas', [easController::class, 'index']);
Route::get('/eas/tambahdata', [easController::class, 'tambahdata']);
Route::post('/eas/store', [easController::class, 'store']);
