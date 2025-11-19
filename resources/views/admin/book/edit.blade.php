@extends('layouts.admin')
@section('title', 'Edit Data Buku')

@section('content')
<div class="container-fluid">
  <h2>Edit Data Buku</h2>

  <form action="{{ route('admin.books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
      <label>Kode Buku</label>
      <input type="text" name="kode_buku" value="{{ $book->kode_buku }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
      <label>Judul</label>
      <input type="text" name="judul" value="{{ $book->judul }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
      <label>Penulis</label>
      <input type="text" name="penulis" value="{{ $book->penulis }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
      <label>Kategori</label>
      <input type="text" name="kategori" value="{{ $book->kategori }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
      <label>Deskripsi</label>
      <textarea name="deskripsi" class="form-control" rows="4">{{ $book->deskripsi }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('admin.books.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection