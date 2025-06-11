<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sembakoController extends Controller
{
    public function index()
    {
    	// mengambil data dari table sembako
    	$sembako = DB::table('sembako')->paginate();

    	// mengirim data sembako ke view index
    	return view('sembakoindex',['sembako' => $sembako]);
    }

// method untuk menampilkan view form tambah sembako
    public function tambah(){
        // memanggil view tambah
        return view('sembakotambah');
    }

    // method untuk insert data ke table sembako
public function store(Request $request)
{
	// insert data ke table sembako
    $tersedia = request()->has('tersedia') ? 1 : 0;
	DB::table('sembako')->insert([
		'merksembako' => $request->merk,
		'hargasembako' => $request->harga,
		'berat' => $request->berat,
		'tersedia' => $tersedia
	]);
	// alihkan halaman ke halaman sembako
	return redirect('/sembako');

}

// method untuk edit data sembako
public function edit($id)
{
	// mengambil data sembako berdasarkan id yang dipilih
	$sembako = DB::table('sembako')->where('idsembako',$id)->get();
	// passing data sembako yang didapat ke view edit.blade.php
	return view('sembakoedit',['sembako' => $sembako]);

}

// update data sembako
public function update(Request $request)
{
	// update data sembako
    $tersedia = request()->has('tersedia') ? 1 : 0;
	DB::table('sembako')->where('idsembako',$request->id)->update([
		'merksembako' => $request->merk,
		'hargasembako' => $request->harga,
		'berat' => $request->berat,
		'tersedia' => $tersedia
	]);
	// alihkan halaman ke halaman sembako
	return redirect('/sembako');
}

// method untuk hapus data sembako
public function hapus($id)
{
	// menghapus data sembako berdasarkan id yang dipilih
	DB::table('sembako')->where('idsembako',$id)->delete();

	// alihkan halaman ke halaman sembako
	return redirect('/sembako');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table sembako sesuai pencarian data
		$sembako = DB::table('sembako')
		->where('merksembako','like',"%".$cari."%")
		->paginate();

    		// mengirim data sembako ke view index
		return view('sembakoindex',['sembako' => $sembako]);

	}
}

