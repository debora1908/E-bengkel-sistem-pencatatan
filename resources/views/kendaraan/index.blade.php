@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Daftar Servis</h2>

            <div class="mb-3">
                <a href="{{ route('kendaraan.create') }}" class="btn btn-emerald">
                    Tambah Kendaraan
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Plat Nomor</th>
                                <th>Nama Pemilik</th>
                                <th>Merk Kendaraan</th>
                                <th>Keluhan</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($kendaraans as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->plat_nomor }}</td>
                                <td>{{ $k->nama_pemilik }}</td>
                                <td>{{ $k->merk_kendaraan }}</td>
                                <td>{{ $k->keluhan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection