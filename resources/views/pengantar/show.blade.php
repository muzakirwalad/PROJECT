@extends('layouts.app')

@section('title', 'Tampilan papan bunga')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $mfrflorist->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $mfrflorist->alamat }}" readonly>
        </div>
    </div>
    <div class="col mb-3">
        <label class="form-label">tanggal pemesanan</label>
        <input type="date" name="tanggal_pemesanan" class="form-control" placeholder="" value="{{ $mfrflorist->tanggal_pemesanan }}" readonly>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">pilihan papan</label>
            <input type="text" name="pilihan_papan" class="form-control" placeholder="pilihan_papan" value="{{ $mfrflorist->pilihan_papan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $mfrflorist->harga }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $mfrflorist->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $mfrflorist->updated_at }}" readonly>
        </div>
    </div>
@endsection
