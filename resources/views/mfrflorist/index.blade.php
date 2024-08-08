@extends('layouts.app')
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Pemesan</h1>
        <a href="{{ route('mfrflorists.create')}}" class="btn btn-primary">Tambah pemesan</a>
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
                <th>Tanggal pemesanan</th>
                <th>Pilihan papan</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($mfrflorist->count() > 0)
                @foreach($mfrflorist as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->alamat}}</td>
                        <td class="align-middle">{{ $rs->tanggal_pemesanan}}</td>
                        <td class="align-middle">{{ $rs->pilihan_papan }}</td>
                        <td class="align-middle">{{ $rs->harga }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">

                            <a href="{{ route('mfrflorists.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('mfrflorists.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('mfrflorists.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('yakin ?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Hapus</button>


                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Pesanan  tidak di temukan</td>
                </tr>
            @endif
        </tbody>

    </table>
@endsection
