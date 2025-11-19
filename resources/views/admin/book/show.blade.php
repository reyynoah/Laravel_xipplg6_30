@extends('layouts.admin')

@section('title', 'Detail Buku')

@section('content')
<div class="container-fluid">
  <h1 class="mb-3">Detail Buku</h1>

  <div class="card">
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <td>{{ $book->id }}</td>
        </tr>
        <tr>
          <th>Kode Buku</th>
          <td>{{ $book->kode_buku }}</td>
        </tr>
        <tr>
          <th>Judul</th>
          <td>{{ $book->judul }}</td>
        </tr>
        <tr>
          <th>Penulis</th>
          <td>{{ $book->penulis }}</td>
        </tr>
        <tr>
          <th>Kategori</th>
          <td>{{ $book->kategori }}</td>
        </tr>
        <tr>
          <th>Deskripsi</th>
          <td>{{ $book->deskripsi }}</td>
        </tr>
      </table>

      <a href="{{ route('admin.books.index') }}" class="btn btn-secondary">Kembali</a>
      <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
    </div>
  </div>
</div>
@endsection