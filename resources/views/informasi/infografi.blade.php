@extends('layouts.app')

@section('title', 'Infografis')

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
                    Infografis
                </li>
            </ol>
        </nav>

        <h1 class="my-4 text-center" style="color: #a51212;">Infografis</h1>
        <p class="text-center mb-4">Berikut adalah koleksi infografis terbaru:</p>

        <div class="d-flex flex-wrap justify-content-center gap-4">
            @php
                $infographics = [
                    [
                        'judul' => 'Pentingnya Kebersihan Lingkungan',
                        'tanggal' => '2024-12-01',
                        'gambar' => 'https://via.placeholder.com/400x400?text=Kebersihan+Lingkungan',
                        'file' => '/files/kebersihan-lingkungan.pdf',
                    ],
                    [
                        'judul' => 'Tips Menghemat Energi di Rumah',
                        'tanggal' => '2024-12-05',
                        'gambar' => 'https://via.placeholder.com/400x400?text=Hemat+Energi',
                        'file' => '/files/hemat-energi.pdf',
                    ],
                    [
                        'judul' => 'Panduan Mengurangi Sampah Plastik',
                        'tanggal' => '2024-12-10',
                        'gambar' => 'https://via.placeholder.com/400x400?text=Sampah+Plastik',
                        'file' => '/files/mengurangi-sampah-plastik.pdf',
                    ],
                    [
                        'judul' => 'Manfaat Bersepeda untuk Kesehatan',
                        'tanggal' => '2024-12-15',
                        'gambar' => 'https://via.placeholder.com/400x400?text=Bersepeda',
                        'file' => '/files/bersepeda-kesehatan.pdf',
                    ],
                    [
                        'judul' => 'Peran Teknologi Dalam Pendidikan',
                        'tanggal' => '2024-12-20',
                        'gambar' => 'https://via.placeholder.com/400x400?text=Teknologi+Pendidikan',
                        'file' => '/files/teknologi-pendidikan.pdf',
                    ],
                    [
                        'judul' => 'Pola Hidup Sehat untuk Produktivitas',
                        'tanggal' => '2024-12-25',
                        'gambar' => 'https://via.placeholder.com/400x400?text=Hidup+Sehat',
                        'file' => '/files/hidup-sehat.pdf',
                    ],
                ];
            @endphp

            @foreach ($infographics as $infographic)
                <div class="card shadow-sm" style="width: 18rem;">
                    <img src="{{ $infographic['gambar'] }}" class="card-img-top" alt="{{ $infographic['judul'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">{{ $infographic['judul'] }}</h5>
                        <p class="text-muted mb-2">
                            <small><i class="bi bi-calendar-check"></i> Dipublikasikan: {{ $infographic['tanggal'] }}</small>
                        </p>
                        <div class="mt-auto">
                            <a href="{{ $infographic['file'] }}" target="_blank" class="btn btn-success mb-2 w-100">
                                <i class="bi bi-download"></i> Unduh Infografis
                            </a>
                            <a href="#" class="btn btn-primary w-100">
                                <i class="bi bi-eye"></i> Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
