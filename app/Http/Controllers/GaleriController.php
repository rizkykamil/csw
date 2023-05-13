<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        return view('admin.galeri.index');
    }
    public function create()
    {
        return view('admin.porto.tambah');
    }
}
