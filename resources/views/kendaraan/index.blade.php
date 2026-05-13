@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-11">
        
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <h2 class="fw-bold mb-0 text-dark">Antrean <span class="text-success">Servis</span></h2>
                <p class="text-muted mb-0">Daftar kendaraan yang masuk ke bengkel hari ini.</p>
            </div>
            
            <a href="{{ route('kendaraan.create') }}" class="btn btn-emerald shadow-sm px-4">
                <i class="fas fa-plus-circle me-2"></i>Tambah Kendaraan
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4 py-3 text-uppercase fs-7 fw-bold text-secondary" style="width: 5%">No</th>
                                <th class="py-3 text-uppercase fs-7 fw-bold text-secondary" style="width: 15%">Plat Nomor</th>
                                <th class="py-3 text-uppercase fs-7 fw-bold text-secondary" style="width: 20%">Pemilik</th>
                                <th class="py-3 text-uppercase fs-7 fw-bold text-secondary" style="width: 15%">Merk</th>
                                <th class="py-3 text-uppercase fs-7 fw-bold text-secondary">Keluhan</th>
                                <th class="py-3 text-uppercase fs-7 fw-bold text-secondary text-center" style="width: 15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kendaraans as $k)
                            <tr>
                                <td class="ps-4 fw-medium">{{ $loop->iteration }}</td>
                                <td>
                                    <span class="badge bg-dark px-3 py-2 font-monospace">{{ $k->plat_nomor }}</span>
                                </td>
                                <td class="fw-bold text-dark">{{ $k->nama_pemilik }}</td>
                                <td>{{ $k->merk_kendaraan }}</td>
                                <td class="text-muted small">{{ $k->keluhan }}</td>
                                <td class="text-center">
                                    <a href="{{ route('kendaraan.edit', $k->id) }}" class="btn btn-sm btn-warning px-3 rounded-pill shadow-sm">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>

                                    {{-- Tombol Hapus nanti di sini --}}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="fas fa-car-crash fa-3x mb-3 opacity-25"></i>
                                        <p class="mb-0">Belum ada antrean kendaraan.</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection