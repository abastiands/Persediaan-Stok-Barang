<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PrediksiController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        // get prediksi stok
        $prediksis = Penjualan::orderBy('id', 'asc')->paginate(10);
        $produks = Produk::all();

        // render view with prediksi stok
        return view('prediksis.index', compact('prediksis', 'produks'));
    }
}
