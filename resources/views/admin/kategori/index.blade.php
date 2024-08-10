@extends('layouts.app')
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Design</h1>
        <a href="/kategori/create" class="btn btn-primary">Tambah Kategori</a>
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
                <th>Kategori</th>
                <th>Kata Kata</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                {{-- @foreach($design as $item)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $item->nama_design }}</td>
                        <td class="align-middle">{{ $item->jumlah_papan }}</td>
                        <td class="align-middle">{{ $item->harga }}</td>
                        <td class="align-middle"><img src="{{ asset('/foto/'.$item->foto) }}" alt="" width="100"></td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example"> --}}
                                {{-- <a href="{{ route('pemesan.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('pemesan.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a> --}}
                                {{-- <form action="{{ route('pemesan.destroy', $rs->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Yakin?')"> --}}
                                    {{-- @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach --}}
            {{-- @else --}}
                <tr>
                    <td class="text-center" colspan="7">Pesanan tidak ditemukan</td>
                </tr>
            {{-- @endif --}}
        </tbody>
    </table>
@endsection
