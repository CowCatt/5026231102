<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class easController extends Controller
{
    public function index()
    {
    	// mengambil data dari table nilai
    	$nilai = DB::table('nilai')->get();

    	// mengirim data pegawai ke view index
    	return view('eas',['nilai' => $nilai]);
    }

// method untuk menampilkan view form tambah nilai mhs
    public function tambahdata(){
        // memanggil view tambah
        return view('tambahdata');
    }

    // method untuk insert data ke table nilai
public function store(Request $request)
{
	// insert data ke table nilai
	DB::table('nilai')->insert([
		'id' => $request->id,
		'nomorinduksiswa' => $request->nomorinduksiswa,
		'nilaiangka' => $request->nilaiangka,
		'sks' => $request->sks
	]);
	// alihkan halaman ke halaman nilai
	return redirect('/eas');

}

}

