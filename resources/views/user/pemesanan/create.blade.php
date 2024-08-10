@extends('user.layouts.app')
@section('contents')
    <form action="/pemesanan/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-danger">
                        <div class="card-header  bg-primary">
                            <center>
                                <h3 class="card-title" style="font-weight: bold; color: black;">isi pesanan</h3>
                            </center>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <center> <label for="nama_pengantar" style="font-weight: bold; color: black;">Nama</label> </center>
                                <div class="input-group">

                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <center> <label for="hp" style="font-weight: bold; color: black;">Alamat yang akan di dituju </label> </center>
                                <div class="input-group">
                                    <input type="text" name="alamat_yang_dituju" class="form-control" data-mask placeholder="Masukkan Alamat yang akan dituju" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <center> <label for="hp" style="font-weight: bold; color: black;">Custom Kata Kata</label> </center>
                                <div class="input-group">
                                    <input type="text" name="kategori" class="form-control" data-mask placeholder="Masukkan Kata Kata" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <center> <label for="hp" style="font-weight: bold; color: black;">Design</label> </center>
                                <select name="design_id" class="form-control" id="">
                                    <option value="">-Pilih Design-</option>
                                    @foreach($design as $data)
                                    <option value="{{$data->id}}">{{$data->nama_design}}</option>
                                    @endforeach
                                </select>
                            </div>
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
