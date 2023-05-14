<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $data = Galeri::all();
        return view('admin.galeri.index',compact('data'));
    }
    public function create()
    {
        return view('admin.galeri.tambah');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'file' => 'required',
            'deskripsi' => 'required',
        ]);

        $galeri = new Galeri;
        $galeri->name = $request->name;
        $galeri->deskripsi = $request->deskripsi;
        $gambar = $request->file('file');
        $gambarPath = $gambar->move('assets/images/galeri', $gambar->getClientOriginalName());
        $gambarPath = str_replace(' ', '_', $gambarPath);
        $galeri->gambar = $gambarPath;
        $galeri->save();

        return redirect()->back()->with('success', 'galeri berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $data = Galeri::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Galeri berhasil dihapus');
    }

    public function edit($id)
    {
        $data = Galeri::find($id);
        return view('admin.galeri.edit', compact('data'));
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required',
            'file' => 'required',
            'deskripsi' => 'required',
        ]);

        $galeri = Galeri::find($id);
        $galeri->name = $request->name;
        $galeri->deskripsi = $request->deskripsi;
        if ($request->file('file')) {
            $gambar = $request->file('file');
            $gambarPath = $gambar->move('assets/images/galeri', $gambar->getClientOriginalName());
            $gambarPath = str_replace(' ', '_', $gambarPath);
            $galeri->gambar = $gambarPath;
        }
        $galeri->save();

        return redirect()->back()->with('success', 'Galeri berhasil diubah');
    }
}
