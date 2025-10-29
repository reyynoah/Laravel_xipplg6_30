<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $students = Student::all();
    return view('admin.student.index', compact('students'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.student.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'nis' => 'required|unique:students',
        'nama_lengkap' => 'required',
        'jenis_kelamin' => 'required',
        'nisn' => 'required|unique:students',
    ]);

    Student::create($request->all());
    return redirect()->route('admin.students.index')->with('success', 'Data berhasil disimpan!');
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
    public function edit(Student $student)
    {
    return view('admin.student.edit', compact('student'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
    $validated = $request->validate([
        'nis'           => 'required',
        'nama_lengkap'  => 'required',
        'jenis_kelamin' => 'required',
        'nisn'          => 'required',
    ]);

    $student->update($validated);

    return redirect()
        ->route('admin.students.index')
        ->with('success', 'Data siswa berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
