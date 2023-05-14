<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $data = Artikel::all();
        return view('admin.artikel.index', compact('data'));
    }

    public function create()
    {
        return view('admin.artikel.tambah');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'file' => 'required',
            'deskripsi' => 'required',
        ]);

        $artikel = new Artikel;
        $artikel->name = $request->name;
        $artikel->deskripsi = $request->deskripsi;
        $gambar = $request->file('file');
        $gambarPath = $gambar->move('assets/images/artikel', $gambar->getClientOriginalName());
        $gambarPath = str_replace(' ', '_', $gambarPath);
        $artikel->gambar = $gambarPath;
        $artikel->save();

        return redirect()->back()->with('success', 'artikel berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Artikel::find($id);
        return view('admin.artikel.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'file' => 'required',
            'deskripsi' => 'required',
        ]);

        $artikel = Artikel::find($id);
        $artikel->name = $request->name;
        $artikel->deskripsi = $request->deskripsi;
        if ($request->file('file')) {
            $gambar = $request->file('file');
            $gambarPath = $gambar->move('assets/images/artikel', $gambar->getClientOriginalName());
            $gambarPath = str_replace(' ', '_', $gambarPath);
            $artikel->gambar = $gambarPath;
        }
        $artikel->save();

        return redirect()->back()->with('success', 'artikel berhasil diubah');
    }

    public function destroy($id)
    {
        $data = Artikel::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'artikel berhasil dihapus');
    }
    
}
