<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan1;

class Kegiatan1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan1 = Kegiatan1::get();

        return view('kegiatan1.index', compact('kegiatan1'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kegiatan1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
            'foto' => 'required|image',
        ]);
    
        $input = $request->all();
    
        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'foto_kegiatan1/';
            $file->move($destinationPath, $imageName);
            $input['foto'] = $imageName;
        }
    
        Kegiatan1::create($input);
    
        return redirect()->route('kegiatan1.index')->with('success', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kegiatan1 = Kegiatan1::findOrFail($id);

        return view('kegiatan1.edit', compact('kegiatan1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
            'foto' => 'required|image',
        ]);

        $kegiatan1 = Kegiatan1::findOrFail($id);
    
        // Menggunakan data yang diinputkan kecuali untuk foto
        $input = $request->except('foto');
    
        // Handle file upload jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = 'foto_kegiatan1/';
            $file->move($destinationPath, $imageName);
            // Hapus foto lama jika ada
           
            $input['foto'] = $imageName;
        }
    
        // Update data galeri
        $kegiatan1->update($input);
    
        return redirect()->route('kegiatan1.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kegiatan1 = Kegiatan1::findOrFail($id);
        $kegiatan1->delete();
        return redirect()->route('kegiatan1.index')->with('success', 'deleted successfully');
    }
}
