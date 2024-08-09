@extends('layouts.app')

@section('title', 'Tambah Pemesanan')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <form action="{{ route('pemesan.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="col">
                <input type="date" name="tanggal_pemesanan" class="form-control" placeholder="Tanggal_pemesanan">
            </div>
            <div class="col">
                <input type="text" name="pilihan_papan" class="form-control" placeholder="Pilihan papan">
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="harga">
            </div>


            <th>



            <style>
                .btn-small {
                    padding: 8px 8px;
                    font-size: 14px;
                }
            </style>

            <div class="row">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-small">Daftarkan</button>
                </div>
            </th>
            </div>

        </div>
    </form>
@endsection
