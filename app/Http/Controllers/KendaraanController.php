<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan; // 1. Pastikan baris ini ada untuk memanggil model

class KendaraanController extends Controller
{
    public function index()
    {
       
        $kendaraans = Kendaraan::all();

       
        return view('kendaraan.index', compact('kendaraans'));
    }
}