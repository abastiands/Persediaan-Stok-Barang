<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        // get penjualan
        $penjualans = Penjualan::orderBy('id', 'asc')->paginate(10);
        $produks = Produk::all();

        // render view with penjualan
        return view('penjualans.index', compact('penjualans', 'produks'));
    }
    
    // /**
    //  * create
    //  *
    //  * @return void
    //  */
    // public function create()
    // {
    //     $produks = Produk::all();
    //     return view('penjualans.create', compact('produks'));
    // }

    // /**
    //  * store
    //  *
    //  * @param Request $request
    //  * @return void
    //  */
    // public function store(Request $request)
    // {
    //     //validate form
    //     $this->validate($request, [
    //         'terjual'     => 'required|min:1|integer|digits_between:1,3'
    //     ]);

    //     //create penjualan
    //     Penjualan::create([
    //         'id_produk'   => $request->id_produk,
    //         'terjual'     => $request->terjual
    //     ]);

    //     //redirect to index
    //     return redirect()->route('penjualans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    // }

    /**
     * edit
     *
     * @param  mixed $penjualan
     * @return void
     */
    public function edit(Penjualan $penjualan)
    {
        $produk = Produk::all();
        return view('penjualans.edit', compact('penjualan', 'produk'));
    }

    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $penjualan
     * @return void
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //validate form
        $this->validate($request, [
            'terjual'     => 'required|min:1|integer|digits_between:1,3'
        ]);

        //update penjualans
        $penjualan->update([
            'terjual'     => $request->terjual
        ]);

        //redirect to index
        return redirect()->route('penjualans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    // /**
    //  * destroy
    //  *
    //  * @param  mixed $penjualan
    //  * @return void
    //  */
    // public function destroy(Penjualan $penjualan)
    // {
    //     //delete penjualan
    //     $penjualan->delete();

    //     //redirect to index
    //     return redirect()->route('penjualans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    // }
}
