@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-primary">
                <i class="fas fa-clipboard-list me-2"></i>Daftar Antrean Servis
            </h2>
            <a href="{{ route('kendaraan.create') }}" class="btn btn-primary shadow-sm px-4 py-2">
                <i class="fas fa-plus-circle me-2"></i>Tambah Kendaraan
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Plat Nomor</th>
                                <th>Nama Pemilik</th>
                                <th>Merk Kendaraan</th>
                                <th>Keluhan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-muted py-5">
                                    Belum ada data kendaraan. Klik "Tambah Kendaraan" untuk mengisi.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection