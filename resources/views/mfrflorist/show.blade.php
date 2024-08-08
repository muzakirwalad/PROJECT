@extends('layouts.app')
@section('contents')
    <h1 class="mb-0"></h1>
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <center><h3 class="card-title">Tampilan Data Pemesan</h3></center>
            </div>
            <div class="card-body">
                <!-- Nama -->
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" class="form-control" id="nama" value="{{ $mfrflorist->nama }}" readonly placeholder="Masukkan Nama">
                </div>
                <!-- Alamat -->
                <div class="form-group">
                    <label>Alamat:</label>
                    <input type="text" class="form-control" id="alamat" value="{{ $mfrflorist->alamat }}" readonly placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                    <label>tanggal pesanan:</label>
                    <input type="text" class="form-control" id="alamat" value="{{ $mfrflorist->tanggal_pemesanan }}" readonly placeholder="tanggal pemesanan">
                </div>
                <div class="form-group">
                    <label>pilihan papan:</label>
                    <input type="text" class="form-control" id="pilihan papan" value="{{ $mfrflorist->pilihan_papan }}" readonly placeholder="pilihan papan">
                </div>
                <div class="form-group">
                    <label>Harga:</label>
                    <input type="text" class="form-control" id="harga" value="{{ $mfrflorist->harga }}" readonly placeholder="harga">
                </div>
                <div class="form-group">
                    <label>Created At:</label>
                    <input type="text" class="form-control" id="Created At" value="{{ $mfrflorist->Created_At }}" readonly placeholder="created_at">
                </div>
                <div class="form-group">
                    <label>Updated At:</label>
                    <input type="text" class="form-control" id="Updated At" value="{{ $mfrflorist->Updated_At }}" readonly placeholder="created_at">
                </div>


        </div>
    </div>


@endsection
