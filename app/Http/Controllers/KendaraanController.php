<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan; 

class KendaraanController extends Controller
{
    // Menampilkan halaman Daftar Servis
    public function index()
    {
        $kendaraans = Kendaraan::all(); 
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
      
        Kendaraan::create([
            'plat_nomor' => $request->plat_nomor,
            'nama_pemilik' => $request->nama_pemilik,
            'merk_kendaraan' => $request->merk_kendaraan,
            'keluhan' => $request->keluhan,
        ]);

        return redirect()->route('kendaraan.index');
    }
}