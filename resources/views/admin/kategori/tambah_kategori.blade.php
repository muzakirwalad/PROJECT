@extends('layouts.app')
@section('contents')
    <form action="/kategori/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-danger">
                        <div class="card-header  bg-primary">
                            <center>
                                <h3 class="card-title" style="font-weight: bold; color: black;">Tambah Kategori</h3>
                            </center>
                        </div>
                        {{-- <--pengantar--> --}}
                        <div class="card-body">
                            <div class="form-group">
                                <center> <label for="nama_pengantar" style="font-weight: bold; color: black;">Kategori</label> </center>
                                <div class="input-group">

                                    <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori" required>
                                </div>
                            </div>
                        {{-- <--Hp--> --}}
                            <div class="form-group">
                                <center> <label for="hp" style="font-weight: bold; color: black;">Kata Kata</label> </center>
                                <div class="input-group">

                                    <input type="text" name="kata_kata" class="form-control" data-mask placeholder="Masukkan Kata-Kata di Papan Bunga" required>
                                </div>
                            </div>


                    <!-- /.card -->
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
