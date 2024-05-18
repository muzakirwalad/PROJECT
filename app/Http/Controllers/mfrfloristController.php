<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mfrflorist;

class mfrfloristController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mfrflorist = Mfrflorist::orderBy('created_at', 'DESC')->get();

        return view('mfrflorist.index', compact('mfrflorist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mfrflorist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        mfrflorist::create($request->all());

        return redirect()->route('mfrflorists')->with('Berhasil', 'papan bunga berhasil ditambah');
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
        $mfrflorist = mfrflorist::findOrFail($id);

        $mfrflorist->delete();

        return redirect()->route('mfrflorists')->with('ess', 'papan bunga  Berhasil Dihapus');
    }
}
