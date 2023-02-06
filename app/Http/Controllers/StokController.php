<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        // get produk
        $stoks = Produk::orderBy('id', 'asc')->paginate(10);

        // render view with produk
        return view('stoks.index', compact('stoks'));
    }

    /**
     * edit
     *
     * @param  mixed $stok
     * @return void
     */
    public function edit(Produk $stok)
    {
        return view('stoks.edit', compact('stok'));
    }

    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $stok
     * @return void
     */
    public function update(Request $request, Produk $stok)
    {
        //validate form
        $this->validate($request, [
            'stok'     => 'required|min:1|integer|digits_between:1,3'
        ]);

        //update stok
        $stok->update([
            'stok'     => $request->stok
        ]);

        //redirect to index
        return redirect()->route('stoks.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
