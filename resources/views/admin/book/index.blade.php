@extends('layouts.admin')

@section('title', 'Data Buku')

@section('content')
<div class="container">
  <h1 class="mb-4">Data Buku</h1>
  <a href="{{ route('admin.books.create') }}" class="btn btn-primary mb-3">+ Tambah Buku</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Kode Buku</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $book)
      <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->kode_buku }}</td>
        <td>{{ $book->judul }}</td>
        <td>{{ $book->penulis }}</td>
        <td>{{ $book->kategori }}</td>
        <td>{{ Str::limit($book->deskripsi, 30) }}</td>

        <td>
          <a href="{{ route('admin.books.show', $book->id) }}" class="btn btn-info btn-sm">Lihat</a>
          <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>

          <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" class="d-inline" 
            onsubmit="return confirm('Apakah kamu yakin ingin menghapus data buku ini?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
          </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection