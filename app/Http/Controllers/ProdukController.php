<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Bahan;
use App\Models\Jenisproduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        // get produk
        $produks = Produk::orderBy('id', 'asc')->paginate(10);
        $bahans = Bahan::all();
        $jenisproduks = Jenisproduk::all();

        // render view with produk
        return view('produks.index', compact('produks', 'bahans', 'jenisproduks'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $bahans = Bahan::all();
        $jenisproduks = Jenisproduk::all();
        return view('produks.create', compact('bahans', 'jenisproduks'));
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama'   => 'required|min:5'
        ]);

        //create produk
        Produk::create([
            'id_bahan'   => $request->id_bahan,
            'id_jenis'   => $request->id_jenis,
            'nama'       => $request->nama,
            'stok'       => $request->stok
        ]);

        //redirect to index
        return redirect()->route('produks.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $produk
     * @return void
     */
    public function edit(Produk $produk)
    {
        $bahans = Bahan::all();
        $jenisproduks = Jenisproduk::all();
        return view('produks.edit', compact('produk', 'bahans', 'jenisproduks'));
    }

    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $produk
     * @return void
     */
    public function update(Request $request, Produk $produk)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required|min:5'
        ]);

        //update produk
        $produk->update([
            'id_bahan' => $request->id_bahan,
            'id_jenis' => $request->id_jenis,
            'nama'     => $request->nama
        ]);

        //redirect to index
        return redirect()->route('produks.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $produk
     * @return void
     */
    public function destroy(Produk $produk)
    {
        //delete produk
        $produk->delete();

        //redirect to index
        return redirect()->route('produks.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
