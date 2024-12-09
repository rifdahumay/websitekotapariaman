@extends('layouts.app')

@section('title', 'Agenda')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light p-4 rounded">
                <li class="breadcrumb-item">
                    <a href="{{ route('landing') }}" style="color: #a51212; text-decoration: none;">
                        <i class="bi bi-house-door"></i> Beranda
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/agenda') }}" style="color: #a51212; text-decoration: none;">
                        Agenda
                    </a>
                </li>
            </ol>
        </nav>
        <h1 class="my-4 text-center gradient-text fw-bold">Agenda</h1>
        <p class="text-center mb-4">Berikut adalah agenda kegiatan yang akan datang:</p>
        
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @php
                $agendas = [
                    [
                        'judul' => 'Workshop Laravel',
                        'tanggal' => '2024-12-10',
                        'lokasi' => 'Ruang Serbaguna A',
                        'keterangan' => 'Belajar dasar Laravel untuk pemula.',
                        'gambar' => '/logos/Cover image.png',
                        'tanggal_icon' => 'bi-calendar-date',
                        'lokasi_icon' => 'bi-geo-alt',
                    ],
                    [
                        'judul' => 'Seminar Teknologi AI',
                        'tanggal' => '2024-12-15',
                        'lokasi' => 'Auditorium Utama',
                        'keterangan' => 'Membahas perkembangan terbaru dalam teknologi AI.',
                        'gambar' => 'https://via.placeholder.com/150?text=Seminar+AI',
                        'tanggal_icon' => 'bi-calendar-date',
                        'lokasi_icon' => 'bi-geo-alt',
                    ],
                    [
                        'judul' => 'Workshop Laravel',
                        'tanggal' => '2024-12-10',
                        'lokasi' => 'Ruang Serbaguna A',
                        'keterangan' => 'Belajar dasar Laravel untuk pemula.',
                        'gambar' => '/logos/Cover image.png',
                        'tanggal_icon' => 'bi-calendar-date',
                        'lokasi_icon' => 'bi-geo-alt',
                    ],
                    [
                        'judul' => 'Seminar Teknologi AI',
                        'tanggal' => '2024-12-15',
                        'lokasi' => 'Auditorium Utama',
                        'keterangan' => 'Membahas perkembangan terbaru dalam teknologi AI.',
                        'gambar' => 'https://via.placeholder.com/150?text=Seminar+AI',
                        'tanggal_icon' => 'bi-calendar-date',
                        'lokasi_icon' => 'bi-geo-alt',
                    ],
                    [
                        'judul' => 'Workshop Laravel',
                        'tanggal' => '2024-12-10',
                        'lokasi' => 'Ruang Serbaguna A',
                        'keterangan' => 'Belajar dasar Laravel untuk pemula.',
                        'gambar' => '/logos/Cover image.png',
                        'tanggal_icon' => 'bi-calendar-date',
                        'lokasi_icon' => 'bi-geo-alt',
                    ],
                    [
                        'judul' => 'Seminar Teknologi AI',
                        'tanggal' => '2024-12-15',
                        'lokasi' => 'Auditorium Utama',
                        'keterangan' => 'Membahas perkembangan terbaru dalam teknologi AI.',
                        'gambar' => 'https://via.placeholder.com/150?text=Seminar+AI',
                        'tanggal_icon' => 'bi-calendar-date',
                        'lokasi_icon' => 'bi-geo-alt',
                    ],
                ];
            @endphp

            @foreach ($agendas as $agenda)
                <div class="card shadow-lg rounded-3" style="width: 18rem;">
                    <img src="{{ $agenda['gambar'] }}" class="card-img-top" alt="{{ $agenda['judul'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" style="font-size: 1.25rem; color: #a51212;">{{ $agenda['judul'] }}</h5>
                        <p class="card-text text-muted mb-3">{{ Str::limit($agenda['keterangan'], 100) }}</p>

                        <div class="d-flex justify-content-between mt-auto">
                            <div class="d-flex align-items-center">
                                <i class="bi {{ $agenda['tanggal_icon'] }} me-2" style="color: #a51212;"></i>
                                <span>{{ $agenda['tanggal'] }}</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi {{ $agenda['lokasi_icon'] }} me-2" style="color: #a51212;"></i>
                                <span>{{ $agenda['lokasi'] }}</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary mt-3 w-100">Buka Agenda</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
