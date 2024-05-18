@extends('layouts.app')

@section('title', 'Edit Papan Bunga')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <form action="{{route('mfrflorists.update',$mfrflorist->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $mfrflorist->nama }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $mfrflorist->alamat }}">
            </div>
        </div>
        <div class="col mb-3">
            <label class="form-label">tanggal_pemesanan</label>
            <input type="date" name="tanggal_pemesanan" class="form-control" placeholder="tanggal_pemesanan" value="{{ $mfrflorist->tanggal_pemesanan}}">
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">pilihan_papan</label>
                <input type="text" name="pilihan_papan" class="form-control" placeholder="pilihan_papan" value="{{ $mfrflorist->pilihan_papan }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $mfrflorist->harga }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
