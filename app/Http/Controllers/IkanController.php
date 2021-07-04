<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use Illuminate\Http\Request;
use Alert;

class IkanController extends Controller
{
    public function index()
    {
        $ikans = Ikan::latest()->get();
        return view('ikan.index', compact('ikans'));
    }

    public function create(Ikan $ikan)
    {
        return view('ikan.create', compact('ikan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'photo' => 'required',
            'harga' => 'required',
            'penjual' => 'required',
            'tanggal_beli' => 'required',
        ]);
        
        $attr = $request->all();
        // return $attr;
        $photo = $request->photo ? request()->file('photo')->store("img/photo") : null;
        // return $photo;
        $attr['photo'] = $photo;
        // return $attr;
        
        Ikan::create($attr);
        
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        return redirect()->route('ikans.index');
    }

    public function show(Ikan $ikan)
    {
        return view('ikan.show', compact('ikan'));
    }

    public function edit(Ikan $ikan)
    {
        return view('ikan.edit', compact('ikan'));
    }

    public function update(Request $request, Ikan $ikan)
    {
        $request->validate([
            'nama' => 'required',
            'photo' => 'nullable',
            'harga' => 'required',
            'penjual' => 'required',
            'tanggal_beli' => 'required',
        ]);

        $attr = $request->all();

        if(request()->file('photo')){
            \Storage::delete($ikan->photo);
            $photo = request()->file('photo')->store("img/photo");
        } else{
            $photo = $ikan->photo;
        }

        $attr['photo'] = $photo;
        // return $attr;
        $ikan->update($attr);

        Alert::success('Pemberitahun!', 'Berhasil Diupdate');
        return redirect()->route('ikans.index');
    }

    public function destroy(Ikan $ikan)
    {
        \Storage::delete($ikan->photo);
        $ikan->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('ikans.index');
    }
}
