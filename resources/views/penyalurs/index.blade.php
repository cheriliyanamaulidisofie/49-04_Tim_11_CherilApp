@extends('layouts.app')

@section('title', 'Data Lembaga Penyalur')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Lembaga Penyalur</h3>
        <a href="{{ route('penyalurs.create') }}" class="btn btn-primary">Tambah Penyalur</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Bidang</th>
                        <th>Alat</th>
                        <th>Kontak</th>
                        <th width="18%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($penyalurs as $index => $penyalur)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $penyalur->nama_lembaga }}</td>
                            <td>{{ $penyalur->bidang }}</td>
                            <td>{{ $penyalur->alamat }}</td>
                            <td>{{ $penyalur->kontak }}</td>
                            <td>
                                <a href="{{ route('penyalurs.edit', $penyalur->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('penyalurs.destroy', $penyalur->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Data Lembaga Penyalur belum tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection