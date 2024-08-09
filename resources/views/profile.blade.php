@extends('layouts.app')

@section('contents')
    <form action="{{ route('pengantar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-danger">
                        <div class="card-header text-center">
                            <h3 class="card-title">profile</h3>
                        </div>
                        <div class="card-footer text-center">
                            <i class="fas fa-camera-retro fa-3x"></i>
                            <p>Upload Foto/Gambar</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="profil" class="form-control" placeholder="Masukkan Profil" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" name="hp" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukkan Nomor HP" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" name="tempat_tinggal" class="form-control" placeholder="Masukkan Tempat Tinggal" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Gmail" required>
                                </div>
                            </div>
                        </div>
                        <!-- Icon Foto/Gambar -->
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
