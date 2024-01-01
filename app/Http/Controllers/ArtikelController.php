<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtikelFormRequest;
use App\Models\tb_artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = tb_artikel::orderBy('id', 'desc')->paginate(5);
        return view('admin.dashboard', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtikelFormRequest $request)
    {
        $image = $request->file('image');
        $image->storeAs('public/images', $image->hashName());
        
        $data = $request->all();

        tb_artikel::create($data);
        return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan');
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
        $data = tb_artikel::find($id);
        return view('admin.edit', [
            "data" => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Temukan data dengan ID yang diberikan
        $data = tb_artikel::find($id);

        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $extension = $image->getClientOriginalExtension(); // Get the file extension
            $nama_image = time() . '_' . uniqid() . '.' . $extension;

            // Move the uploaded file to the storage location
            $image->storeAs('public/images', $nama_image);

            // Update the profile field with the new filename
            $data->update(['profile' => $nama_image]);
        }
    
        // Perbarui data dengan data baru dari formulir
        $data->update($request->only(['image', 'judul_artikel', 'isi_artikel', 'status_publish']));
    
        // Redirect ke rute yang diinginkan dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui');
    }
    



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = tb_artikel::find($id)->delete();
        return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan');

    }
}
