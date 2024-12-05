@extends('layouts.app')

@section('title', 'Download')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="my-3">
            <ol class="breadcrumb bg-light p-3 rounded">
                <li class="breadcrumb-item">
                    <a href="{{ route('landing') }}" style="color: #a51212; text-decoration: none;">
                        <i class="bi bi-house-door"></i> Beranda
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d;">
                    Download
                </li>
            </ol>
        </nav>
        <h1 class="my-4 text-center" style="color: #a51212;">Download</h1>
        <p class="text-center mb-4">Berikut adalah daftar file yang dapat Anda unduh:</p>
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @php
                $files = [
                    [
                        'judul' => 'Panduan Penggunaan Sistem',
                        'deskripsi' => 'Panduan lengkap untuk menggunakan sistem kami.',
                        'file' => '/files/panduan-penggunaan.pdf',
                        'icon' => 'bi bi-file-earmark-pdf',
                        'tanggal' => '2024-11-30',
                    ],
                    [
                        'judul' => 'Daftar Proyek Baru',
                        'deskripsi' => 'Informasi proyek yang akan dilaksanakan tahun ini.',
                        'file' => '/files/daftar-proyek-baru.pdf',
                        'icon' => 'bi bi-file-earmark-spreadsheet',
                        'tanggal' => '2024-12-01',
                    ],
                    [
                        'judul' => 'Kebijakan Privasi',
                        'deskripsi' => 'Dokumen kebijakan privasi pengguna.',
                        'file' => '/files/kebijakan-privasi.pdf',
                        'icon' => 'bi bi-file-earmark-pdf',
                        'tanggal' => '2024-11-28',
                    ],
                    [
                        'judul' => 'Kebijakan Privasi',
                        'deskripsi' => 'Dokumen kebijakan privasi pengguna.',
                        'file' => '/files/kebijakan-privasi.pdf',
                        'icon' => 'bi bi-file-earmark-pdf',
                        'tanggal' => '2024-11-28',
                    ],
                ];
            @endphp

            @foreach ($files as $file)
                <div class="card shadow-sm mb-4" style="width: 18rem;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">
                            <i class="{{ $file['icon'] }} me-2"></i>{{ $file['judul'] }}
                        </h5>
                        <p class="card-text text-muted">{{ Str::limit($file['deskripsi'], 100) }}</p>
                        <p class="text-muted">
                            <small><i class="bi bi-calendar-check"></i> {{ $file['tanggal'] }}</small>
                        </p>
                        <a href="{{ $file['file'] }}" target="_blank" class="btn btn-success mt-auto">
                            <i class="bi bi-download"></i> Unduh
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
