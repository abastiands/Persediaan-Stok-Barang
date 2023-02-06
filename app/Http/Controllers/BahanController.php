<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BahanController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        // get bahan
        $bahans = Bahan::orderBy('id', 'asc')->paginate(10);

        // render view with bahan
        return view('bahans.index', compact('bahans'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('bahans.create');
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

        //create bahan
        Bahan::create([
            'nama'   => $request->nama
        ]);

        //redirect to index
        return redirect()->route('bahans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    /**
     * edit
     *
     * @param  mixed $bahan
     * @return void
     */
    public function edit(Bahan $bahan)
    {
        return view('bahans.edit', compact('bahan'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $bahan
     * @return void
     */
    public function update(Request $request, Bahan $bahan)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required|min:5'
        ]);

        //update bahan
        $bahan->update([
            'nama'     => $request->nama
        ]);

        //redirect to index
        return redirect()->route('bahans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $bahan
     * @return void
     */
    public function destroy(Bahan $bahan)
    {
        //delete bahan
        $bahan->delete();

        //redirect to index
        return redirect()->route('bahans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
