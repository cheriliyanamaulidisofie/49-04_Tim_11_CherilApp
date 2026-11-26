@extends('layouts.app')

@section('title', 'Tambah Data Lembaga Penyalur')

@section('content')
<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0 shadow rounded">
        <div class="card-body">
          <form action="{{ route('penyalurs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label class="font-weight-bold">Gambar / Logo</label>
              <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
              @error('image')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>

            {{-- Tambahkan field input lainnya di sini sesuai kebutuhan form kamu --}}

            <div class="d-flex gap-2 mt-4">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="{{ url('/penyalurs') }}" class="btn btn-secondary">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection