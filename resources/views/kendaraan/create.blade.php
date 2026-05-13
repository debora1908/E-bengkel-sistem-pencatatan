@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <h3 class="fw-bold mb-4">Form Tambah <span class="text-success">Kendaraan</span></h3>
        
        <form action="{{ route('kendaraan.store') }}" method="POST">
            @csrf <div class="mb-3">
                <label class="form-label fw-bold">Plat Nomor</label>
                <input type="text" name="plat_nomor" class="form-control" required placeholder="BK 1234 XX">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" name="nama_pemilik" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Merk Kendaraan</label>
                <input type="text" name="merk_kendaraan" class="form-control" required placeholder="Honda / Yamaha / Toyota">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Keluhan</label>
                <textarea name="keluhan" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-emerald w-100 fw-bold">SIMPAN DATA</button>
        </form>
    </div>
</div>
@endsection