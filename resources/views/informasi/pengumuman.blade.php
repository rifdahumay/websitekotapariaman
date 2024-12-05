@extends('layouts.app')

@section('title', 'Pengumuman')

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
                    Pengumuman
                </li>
            </ol>
        </nav>
        <h1 class="my-4 text-center" style="color: #a51212;">Pengumuman</h1>
        <p class="text-center mb-4">Berikut adalah pengumuman terbaru:</p>
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @php
                $announcements = [
                    [
                        'judul' => 'Pemeliharaan Sistem',
                        'tanggal' => '2024-12-05',
                        'konten' => 'Akan dilakukan pemeliharaan sistem pada tanggal 10 Desember 2024 pukul 01:00 - 04:00 WIB. Harap maklum atas ketidaknyamanannya.',
                        'gambar' => '/logos/Cover image.png',
                        'icon' => 'bi bi-tools',
                        'file' => '/files/pemeliharaan-sistem.pdf',
                    ],
                    [
                        'judul' => 'Workshop Laravel',
                        'tanggal' => '2024-12-10',
                        'konten' => 'Pendaftaran workshop Laravel untuk pemula telah dibuka. Acara akan dilaksanakan pada 15 Desember 2024 di Ruang Serbaguna A.',
                        'gambar' => '/logos/Cover image.png',
                        'icon' => 'bi bi-calendar-event',
                        'file' => '/files/workshop-laravel.pdf', 
                    ],
                    [
                        'judul' => 'Pengumuman Libur Nasional',
                        'tanggal' => '2024-12-20',
                        'konten' => 'Kantor akan libur pada tanggal 25 Desember 2024 dalam rangka perayaan Hari Natal. Seluruh layanan akan kembali aktif pada tanggal 26 Desember 2024.',
                        'gambar' => '/logos/Cover image.png',
                        'icon' => 'bi bi-flag',
                        'file' => '/files/libur-nasional.pdf',
                    ],
                    [
                        'judul' => 'Pengumuman Libur Nasional',
                        'tanggal' => '2024-12-20',
                        'konten' => 'Kantor akan libur pada tanggal 25 Desember 2024 dalam rangka perayaan Hari Natal. Seluruh layanan akan kembali aktif pada tanggal 26 Desember 2024.',
                        'gambar' => '/logos/Cover image.png',
                        'icon' => 'bi bi-flag',
                        'file' => '/files/libur-nasional.pdf', 
                    ],
                ];
            @endphp

            @foreach ($announcements as $announcement)
                <div class="card shadow-sm mb-4" style="width: 18rem;">
                    <img src="{{ $announcement['gambar'] }}" class="card-img-top" alt="{{ $announcement['judul'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-danger">
                            <i class="{{ $announcement['icon'] }} me-2"></i>{{ $announcement['judul'] }}
                        </h5>
                        <p class="card-text text-muted mb-3">{{ Str::limit($announcement['konten'], 100) }}</p>
                        <p class="text-muted">
                            <small><i class="bi bi-calendar-check"></i> {{ $announcement['tanggal'] }}</small>
                        </p>
                        <div class="mt-auto d-flex justify-content-between">
                            <a href="#" class="btn btn-info">
                                <i class="bi bi-eye"></i> Lihat Detail
                            </a>
                            <a href="{{ $announcement['file'] }}" target="_blank" class="btn btn-success">
                                <i class="bi bi-download"></i> Unduh
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
