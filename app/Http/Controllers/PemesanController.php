<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mfrflorist;// Pastikan nama model sesuai konvensi Laravel

class PemesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesan = mfrflorist::orderBy('created_at', 'DESC')->get();


        return view('pemesan.index', compact('pemesan'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemesan.create');
    }


    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Buat data baru
        Pemesan::create($request->all());

        // Redirect ke halaman index dengan pesan status
        return redirect()->route('pemesan.index')->with('status', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Cari data dengan ID
        $mfrflorist = mfrflorist::findOrFail($id);

        return view('pemesan.show', compact('mfrflorist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Cari data dengan ID
        $mfrflorist = mfrflorist::findOrFail($id);

        return view('pemesan.edit', compact('mfrflorist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Cari data dengan ID
        $pemesan = Pemesan::findOrFail($id);

        // Update data
        $pemesan->update($request->all());

        // Redirect ke halaman index dengan pesan status
        return redirect()->route('pemesan.index')->with('status', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data dengan ID
        $pemesan = Pemesan::findOrFail($id);

        // Hapus data
        $pemesan->delete();

        // Redirect ke halaman index dengan pesan status
        return redirect()->route('pemesan.index')->with('status', 'Data berhasil dihapus');
    }
}
