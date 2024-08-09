@extends('layouts.app')

@section('contents')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-center" style="font-weight: bold; color: black;">Tampilan Data Pemesan</h3>
                    </div>
                    <div class="card-body">
                        <!-- Nama -->
                        <div class="form-group">
                            <label for="nama" style="font-weight: bold;color: black;">Nama:</label>
                            <input type="text" class="form-control" id="nama" value="{{ $mfrflorist->nama }}" readonly placeholder="Masukkan Nama">
                        </div>

                        <!-- Alamat -->
                        <div class="form-group">
                            <label for="alamat" style="font-weight: bold; color: black;">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" value="{{ $mfrflorist->alamat }}" readonly placeholder="Masukkan Alamat">
                        </div>

                        <!-- Tanggal Pesanan -->
                        <div class="form-group">
                            <label for="tanggal_pesanan" style="font-weight: bold;color: black;">Tanggal Pesanan:</label>
                            <input type="text" class="form-control" id="tanggal_pesanan" value="{{ $mfrflorist->tanggal_pemesan }}" readonly placeholder="Tanggal Pesanan">
                        </div>

                        <!-- Pilihan Papan -->
                        <div class="form-group">
                            <label for="pilihan_papan" style="font-weight: bold;color: black;">Pilihan Papan:</label>
                            <input type="text" class="form-control" id="pilihan_papan" value="{{ $mfrflorist->pilihan_papan }}" readonly placeholder="Pilihan Papan">
                        </div>

                        <!-- Harga -->
                        <div class="form-group">
                            <label for="harga" style="font-weight: bold;color: black;">Harga:</label>
                            <input type="text" class="form-control" id="harga" value="{{ $mfrflorist->harga }}" readonly placeholder="Harga">
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
