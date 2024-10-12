<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan2;

class Kegiatan2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan2 = Kegiatan2::get();

        return view('kegiatan2.index', compact('kegiatan2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kegiatan2.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required',
            'foto' => 'required|image',
        ]);
    
        $input = $request->all();
    
        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'foto_kegiatan2/';
            $file->move($destinationPath, $imageName);
            $input['foto'] = $imageName;
        }
    
        Kegiatan2::create($input);
    
        return redirect()->route('kegiatan2.index')->with('success', 'berhasil ditambahkan');
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
        $kegiatan2 = Kegiatan2::findOrFail($id);

        return view('kegiatan2.edit', compact('kegiatan2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'isi' => 'required',
            'foto' => 'required|image',
        ]);

        $kegiatan2 = Kegiatan2::findOrFail($id);
    
        // Menggunakan data yang diinputkan kecuali untuk foto
        $input = $request->except('foto');
    
        // Handle file upload jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = 'foto_kegiatan2/';
            $file->move($destinationPath, $imageName);
            // Hapus foto lama jika ada
           
            $input['foto'] = $imageName;
        }
    
        // Update data galeri
        $kegiatan2->update($input);
    
        return redirect()->route('kegiatan2.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kegiatan2 = Kegiatan2::findOrFail($id);
        $kegiatan2->delete();
        return redirect()->route('kegiatan2.index')->with('success', 'deleted successfully');
    }
}
