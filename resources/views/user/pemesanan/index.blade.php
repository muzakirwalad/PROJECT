@extends('user.layouts.app')
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Pemesan</h1>
        <a href="/user/tambah_pemesanan" class="btn btn-primary">Tambah Pemesan</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover table-bordered">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Custom Kata Kata</th>
                <th>Pilihan Papan</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach($pemesanan as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->alamat_yang_dituju }}</td>
                        <td class="align-middle">{{ $rs->kategori }}</td>
                        <td class="align-middle">{{ $rs->design->nama_design }}</td>
                        <td class="align-middle">{{ $rs->design->harga }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                {{-- <a href="{{ route('pemesan.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a> --}}
                                <a href="/bukti_bayar/{{ $rs->id }}" type="button" class="btn btn-warning">Upload Bukti Bayar</a>

                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">

                                <form action="/pemesanan/{{ $rs->id }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Yakin?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Cancle</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection
