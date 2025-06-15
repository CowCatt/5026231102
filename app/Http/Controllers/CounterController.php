<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function index()
    {
        // Ambil jumlah dari tabel
        $jumlah = DB::table('pagecounter')->where('id', 1)->value('jumlah');

        // Naikkan 1
        $jumlah++;

        // Update ke database
        DB::table('pagecounter')->where('id', 1)->update(['jumlah' => $jumlah]);

        // Kirim ke view
        return view('indexpage', ['jumlah' => $jumlah]);
    }
}
