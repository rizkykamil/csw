<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function index()
    {
        $data = Porto::all();
        return view('admin.porto.index', compact('data'));
    }
    public function create()
    {
        return view('admin.porto.tambah');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'file' => 'required',
            'deskripsi' => 'required',
        ]);

        $porto = new Porto;
        $porto->name = $request->name;
        $porto->deskripsi = $request->deskripsi;
        $gambar = $request->file('file');
        $gambarPath = $gambar->move('assets/images/porto', $gambar->getClientOriginalName());
        $gambarPath = str_replace(' ', '_', $gambarPath);
        $porto->gambar = $gambarPath;
        $porto->save();

        return redirect()->back()->with('success', 'Portofolio berhasil ditambahkan');
    }
    public function destroy($id)
    {
        $data = Porto::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Porto berhasil dihapus');
    }
    public function edit($id)
    {
        $data = Porto::find($id);
        return view('admin.porto.edit', compact('data'));
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required',
            'file' => 'required',
            'deskripsi' => 'required',
        ]);

        $porto = Porto::find($id);
        $porto->name = $request->name;
        $porto->deskripsi = $request->deskripsi;
        if ($request->file('file')) {
            $gambar = $request->file('file');
            $gambarPath = $gambar->move('assets/images/porto', $gambar->getClientOriginalName());
            $gambarPath = str_replace(' ', '_', $gambarPath);
            $porto->gambar = $gambarPath;
        }
        $porto->save();

        return redirect()->back()->with('success', 'Porto berhasil diupdate');
    }
}
