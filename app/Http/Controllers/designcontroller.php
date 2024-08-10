<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\design;

class designController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $design = design::all();
        return view('admin.design.design', compact('design'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.design.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $design = new design;

        $design->nama_design = $request->nama_design;
        $design->jumlah_papan = $request->jumlah_papan;
        $design->harga = $request->harga;
        $design->foto = $request->foto->getClientOriginalName();
        $design->save();

        $request->foto->move('foto', $request->foto->getClientOriginalName());

        return redirect('/design')->with('Berhasil', 'papan bunga Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mfrflorist = mfrflorist::findOrFail($id);

        return view('mfrflorist.show', compact('mfrflorist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mfrflorist = mfrflorist::findOrFail($id);

        return view('mfrflorist.edit', compact('mfrflorist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mfrflorist = mfrflorist::findOrFail($id);

        $mfrflorist->update($request->all());

        return redirect()->route('mfrflorists')->with('Berhasil', 'papan bunga Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $desain = Design::find($id);
        $desain->delete();

        return redirect('/design');
    }
}
