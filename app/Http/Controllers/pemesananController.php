<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Design;
use App\Models\Pemesanan;

class pemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('user.pemesanan.index', compact('pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $design = Design::all();
        return view('user.pemesanan.create', compact('design'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pesan = new Pemesanan;
        $pesan->nama = $request->nama;
        $pesan->alamat_yang_dituju = $request->alamat_yang_dituju;
        $pesan->kategori = $request->kategori;
        $pesan->design_id = $request->design_id;
        $pesan->save();

        return redirect('/user/pemesanan')->with('Berhasil', 'papan bunga Berhasil Ditambah');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesan = Pemesanan::find($id);
        $pesan->delete();

        return redirect('/user/pemesanan');
    }
}
