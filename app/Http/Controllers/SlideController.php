<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slide;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slide = Slide::get();

        return view('slide.index', compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slide.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'link' => 'required',
            'foto' => 'required|image',
        ]);
    
        $input = $request->all();
    
        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'foto_slide/';
            $file->move($destinationPath, $imageName);
            $input['foto'] = $imageName;
        }
    
        Slide::create($input);
    
        return redirect()->route('slide.index')->with('success', 'berhasil ditambahkan');
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
        $slide = Slide::findOrFail($id);

        return view('slide.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'link' => 'required',
            'foto' => 'required|image',
        ]);

        $slide = Slide::findOrFail($id);
    
        // Menggunakan data yang diinputkan kecuali untuk foto
        $input = $request->except('foto');
    
        // Handle file upload jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = 'foto_slide/';
            $file->move($destinationPath, $imageName);
            // Hapus foto lama jika ada
           
            $input['foto'] = $imageName;
        }
    
        // Update data galeri
        $slide->update($input);
    
        return redirect()->route('slide.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slide = Slide::findOrFail($id);
        $slide->delete();
        return redirect()->route('slide.index')->with('success', 'deleted successfully');
    }
}
