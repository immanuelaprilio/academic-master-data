<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::all();

        return view('mata_kuliah.index', compact('mataKuliahs'));
    }

    public function create()
    {
        return view('mata_kuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required'
        ]);

        MataKuliah::create($request->all());

        return redirect('/admin/mata-kuliah')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function show(MataKuliah $mata_kuliah)
    {
        return view('mata_kuliah.show', compact('mata_kuliah'));
    }

    public function edit(MataKuliah $mata_kuliah)
    {
        return view('mata_kuliah.edit', compact('mata_kuliah'));
    }

    public function update(Request $request, MataKuliah $mata_kuliah)
    {
        $request->validate([
            'kode' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required'
        ]);

        $mata_kuliah->update($request->all());

        return redirect('/admin/mata-kuliah')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy(MataKuliah $mata_kuliah)
    {
        $mata_kuliah->delete();

        return redirect('/admin/mata-kuliah')
            ->with('success', 'Data berhasil dihapus');
    }
}