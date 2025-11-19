<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $books = Book::all();
    return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'kode_buku' => 'required|unique:books',
        'judul'     => 'required',
        'penulis'   => 'required',
        'kategori'  => 'required',
        'deskripsi' => 'nullable',
    ]);

    Book::create($request->all());

    return redirect()->route('admin.books.index')
                     ->with('success', 'Data buku berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
    return view('admin.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validated = $request->validate([
        'kode_buku' => 'required',
        'judul'     => 'required',
        'penulis'   => 'required',
        'kategori'  => 'required',
        'deskripsi' => 'nullable',
    ]);

    $book = Book::findOrFail($id);
    $book->update($validated);

    return redirect()->route('admin.books.index')->with('success', 'Data buku berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
