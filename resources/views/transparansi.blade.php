@extends('layouts.app')

@section('title', 'Transparansi - Kota Pariaman')

@section('content')

<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-3 rounded">
            <li class="breadcrumb-item">
                <a href="{{ route('landing') }}" style="color: #a51212; text-decoration: none;">
                    <i class="bi bi-house-door"></i> Beranda
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d;">
                Transparansi
            </li>
        </ol>
    </nav>

    <h1 class="text-center mb-4" style="color: #a51212; font-weight: bold;">Transparansi Pemerintahan</h1>
    <p class="text-center mb-5" style="font-size: 18px;">Berikut adalah informasi terkait transparansi pemerintahan Kota Pariaman.</p>

    <div class="row g-4 mb-5">
        <!-- Informasi Anggaran -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #a51212;">Informasi Anggaran</h5>
                    <p class="card-text">Laporan keuangan, APBD, dan realisasi anggaran.</p>
                    <a href="{{ url('/transparansi/anggaran') }}" class="btn btn-outline-warning" style="border-color: #a51212; color: #a51212;">Lihat Detail</a>
                </div>
            </div>
        </div>
        <!-- Proyek dan Pengadaan -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #a51212;">Proyek dan Pengadaan</h5>
                    <p class="card-text">Informasi terkait pengadaan barang dan jasa.</p>
                    <a href="{{ url('/transparansi/proyek') }}" class="btn btn-outline-warning" style="border-color: #a51212; color: #a51212;">Lihat Detail</a>
                </div>
            </div>
        </div>
        <!-- Data Statistik -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #a51212;">Data Statistik</h5>
                    <p class="card-text">Data statistik pemerintahan dan masyarakat.</p>
                    <a href="{{ url('/transparansi/statistik') }}" class="btn btn-outline-warning" style="border-color: #a51212; color: #a51212;">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Dokumen Transparansi -->
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #a51212;">Dokumen Transparansi</h2>
            <p class="text-center">Unduh dokumen resmi terkait transparansi pemerintah.</p>

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 10%;"><i class="bi bi-hash"></i> No</th>
                            <th><i class="bi bi-file-earmark-text-fill"></i> Nama Dokumen</th>
                            <th style="width: 20%;"><i class="bi bi-cloud-arrow-down"></i> Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Laporan Keuangan Tahunan</td>
                            <td>
                                <a href="/files/laporan-keuangan.pdf" target="_blank" class="btn btn-sm btn-success">
                                    <i class="bi bi-download"></i> Unduh
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dokumen APBD 2024</td>
                            <td>
                                <a href="/files/apbd-2024.pdf" target="_blank" class="btn btn-sm btn-success">
                                    <i class="bi bi-download"></i> Unduh
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Laporan Realisasi Anggaran</td>
                            <td>
                                <a href="/files/realisasi-anggaran.pdf" target="_blank" class="btn btn-sm btn-success">
                                    <i class="bi bi-download"></i> Unduh
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
