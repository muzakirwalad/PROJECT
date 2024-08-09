@extends('layouts.app')
@section('contents')
    <form action="{{ route('pengantar.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-danger">
                        <div class="card-header  bg-primary">
                            <center>
                                <h3 class="card-title" style="font-weight: bold; color: black;">Data Pengantar</h3>
                            </center>
                        </div>
                        {{-- <--pengantar--> --}}
                        <div class="card-body">
                            <div class="form-group">
                                <center> <label for="nama_pengantar" style="font-weight: bold; color: black;">Nama Pengantar</label> </center>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="nama_pengantar" class="form-control" placeholder="Masukkan Nama Pengantar" required>
                                </div>
                            </div>
                        {{-- <--Hp--> --}}
                            <div class="form-group">
                                <center> <label for="hp" style="font-weight: bold; color: black;">Hp</label> </center>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" name="hp" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukkan Nomor HP" required>
                                </div>
                            </div>
                        {{-- <!-- Alamat --> --}}
                            <div class="form-group">
                                <center> <label for="alamat" style="font-weight: bold; color: black;">Alamat yang Diantar</label> </center>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat yang Diantar" required></textarea>
                                </div>
                            </div>
                        {{-- <!-- Tanggal Pesanan --> --}}
                            <div class="form-group">
                                <center> <label for="tanggalpesanan" style="font-weight: bold; color: black;">Tanggal Pesanan</label> </center>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" name="tanggal_pesanan" class="form-control" required>
                                </div>
                            </div>
                        {{-- <!-- Tanggal Diantar --> --}}
                            <div class="form-group">
                                <center> <label for="tanggaldiantar" style="font-weight: bold; color: black;">Tanggal Diantar</label> </center>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-check"></i></span>
                                    </div>
                                    <input type="date" name="tanggal_diantar" class="form-control" required>
                                </div>
                            </div>
                        {{-- <!-- Jenis Kendaraan --> --}}
                            <div class="form-group">
                                <center> <label for="jeniskendaraan" style="font-weight: bold; color: black;">Jenis Kendaraan</label> </center>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-truck"></i></span>
                                    </div>
                                    <select name="jenis_kendaraan" class="form-control" required>
                                        <option value="" disabled selected>Pilih Jenis Kendaraan</option>
                                        <option value="L-300">L-300</option>
                                        <option value="Becak">Becak</option>
                                    </select>
                                </div>
                            </div>
                        {{-- <!-- Harga --> --}}
                            <div class="form-group">
                                <center> <label for="harga" style="font-weight: bold; color: black;">harga</label> </center>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                    </div>
                                    <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga" required>
                                </div>
                            </div>
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
