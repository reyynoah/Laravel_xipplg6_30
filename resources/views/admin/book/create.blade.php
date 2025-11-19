@extends('layouts.admin')
@section('title', 'Tambah Buku')

@section('content')
<div class="container">
  <h1>Tambah Data Buku</h1>

  <form action="{{ route('admin.books.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label>Kode Buku</label>
      <input type="text" name="kode_buku" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Judul</label>
      <input type="text" name="judul" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Penulis</label>
      <input type="text" name="penulis" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Kategori</label>
      <input type="text" name="kategori" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Deskripsi</label>
      <textarea name="deskripsi" class="form-control" rows="4"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
@endsection