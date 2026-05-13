<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan; // Pastikan Model sudah dibuat nanti

class KendaraanController extends Controller
{
    public function index()
    {
        // Untuk sementara kita return view saja, datanya menyusul setelah migrasi
        return view('kendaraan.index');
    }
}