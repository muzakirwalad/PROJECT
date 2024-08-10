@extends('layouts.app')
@section('contents')
    <form action="/design/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-danger">
                        <div class="card-header  bg-primary">
                            <center>
                                <h3 class="card-title" style="font-weight: bold; color: black;">input disign</h3>
                            </center>
                        </div>
                        {{-- <--pengantar--> --}}
                        <div class="card-body">
                            <div class="form-group">
                                <center> <label for="nama_pengantar" style="font-weight: bold; color: black;">Nama design</label> </center>
                                <div class="input-group">

                                    <input type="text" name="nama_design" class="form-control" placeholder="Masukkan Nama design" required>
                                </div>
                            </div>
                        {{-- <--Hp--> --}}
                            <div class="form-group">
                                <center> <label for="hp" style="font-weight: bold; color: black;">Jumlah Papan </label> </center>
                                <div class="input-group">

                                    <input type="number" name="jumlah_papan" class="form-control" data-mask placeholder="Masukkan Jumlah Papan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <center> <label for="hp" style="font-weight: bold; color: black;">Harga </label> </center>
                                <div class="input-group">
                                    <input type="number" name="harga" class="form-control" data-mask placeholder="Masukkan Harga" required>
                                </div>
                            </div>

                        {{-- <!-- Tanggal Pesanan --> --}}
                            <div class="form-group">
                                <center> <label for="tanggalpesanan" style="font-weight: bold; color: black;">Foto</label> </center>
                                <div class="input-group">
                                    <input type="file" name="foto" class="form-control" required>
                                </div>

                    <!-- /.card -->
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
