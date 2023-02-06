<?php

namespace App\Http\Controllers;

use App\Models\Jenisproduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JenisprodukController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        // get jenisproduk
        $jenisproduks = Jenisproduk::orderBy('id', 'asc')->paginate(10);

        // render view with jenisproduk
        return view('jenisproduks.index', compact('jenisproduks'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('jenisproduks.create');
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

        //create jenisproduk
        Jenisproduk::create([
            'nama'   => $request->nama
        ]);

        //redirect to index
        return redirect()->route('jenisproduks.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $jenisproduk
     * @return void
     */
    public function edit(Jenisproduk $jenisproduk)
    {
        return view('jenisproduks.edit', compact('jenisproduk'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $jenisproduk
     * @return void
     */
    public function update(Request $request, Jenisproduk $jenisproduk)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required|min:5'
        ]);

        //update jenisproduk
        $jenisproduk->update([
            'nama'     => $request->nama
        ]);

        //redirect to index
        return redirect()->route('jenisproduks.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $jenisproduk
     * @return void
     */
    public function destroy(Jenisproduk $jenisproduk)
    {
        //delete jenisproduk
        $jenisproduk->delete();

        //redirect to index
        return redirect()->route('jenisproduks.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}