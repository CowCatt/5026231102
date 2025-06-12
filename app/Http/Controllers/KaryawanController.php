<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
    	$karyawan = DB::table('karyawan')->paginate();

    	// mengirim data karyawan ke view index
    	return view('karyawanindex',['karyawan' => $karyawan]);
    }

// method untuk menampilkan view form tambah karyawan
    public function tambah(){
        // memanggil view tambah
        return view('karyawantambah');
    }

    // method untuk insert data ke table karyawan
public function store(Request $request)
{
	// insert data ke table karyawan
	DB::table('karyawan')->insert([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');

}

// update data karyawan
public function update(Request $request)
{
	// update data karyawan
    $tersedia = request()->has('tersedia') ? 1 : 0;
	DB::table('karyawan')->where('kodepegawai',$request->id)->update([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
}

// method untuk hapus data karyawan
public function hapus($id)
{
	// menghapus data karyawan berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();

    		// mengirim data karyawan ke view index
		return view('karyawanindex',['karyawan' => $karyawan]);

	}
}

