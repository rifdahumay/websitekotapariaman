@extends('layouts.app')

@section('title', 'Proyek dan Pengadaan - Transparansi')

@section('content')

<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-3 rounded">
            <li class="breadcrumb-item">
                <a href="{{ route('landing') }}" style="color: #a51212; text-decoration: none;">
                    <i class="bi bi-house-door"></i> Beranda
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('/transparansi') }}" style="color: #a51212; text-decoration: none;">
                    Transparansi
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d;">
                Proyek
            </li>
        </ol>
    </nav>

    <h1 class="text-center" style="color: #a51212; font-weight: bold;">Proyek dan Pengadaan</h1>
    <p class="text-center mb-4" style="font-size: 18px;">Informasi tentang proyek dan pengadaan barang/jasa Pemerintah Kota Pariaman.</p>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title" style="color: #a51212;">Proyek Baru</h5>
                    <p class="card-text">Daftar proyek yang akan dilaksanakan tahun ini.</p>
                    <a href="{{ url('/files/daftar-proyek-baru.pdf') }}" target="_blank" class="btn btn-success btn-sm">Unduh Daftar Proyek</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title" style="color: #a51212;">Pengadaan Barang/Jasa</h5>
                    <p class="card-text">Informasi terkait pengadaan barang dan jasa pemerintah.</p>
                    <a href="{{ url('/files/pengadaan-barang-jasa.pdf') }}" target="_blank" class="btn btn-success btn-sm">Unduh Informasi Pengadaan</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <h2 class="text-center" style="color: #a51212;">Detail Proyek Berjalan</h2>
            <p class="text-center">Berikut adalah rincian proyek yang sedang berjalan.</p>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Proyek</th>
                            <th>Lokasi</th>
                            <th>Anggaran</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pembangunan Jalan Utama</td>
                            <td>Kecamatan Pariaman Tengah</td>
                            <td>Rp 2.500.000.000</td>
                            <td><span class="badge bg-primary">Sedang Berjalan</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Renovasi Gedung Balai Kota</td>
                            <td>Kecamatan Pariaman Utara</td>
                            <td>Rp 1.200.000.000</td>
                            <td><span class="badge bg-secondary">Dalam Perencanaan</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Proyek Irigasi</td>
                            <td>Kecamatan Pariaman Selatan</td>
                            <td>Rp 750.000.000</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
