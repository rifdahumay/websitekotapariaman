<!-- resources/views/landing.blade.php -->
@extends('layouts.app')

@section('content')
    @include('partials.hero')
    @include('partials.carousel')
    @include('partials.informasi')
    @include('partials.berita')
    @include('partials.agenda_pengumuman')
    @include('partials.public_services', [
    'services' => [
        'all' => [
            ['title' => 'E-Absensi', 'type' => 'Aplikasi', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Absensi digital', 'link' => '#'],
            ['title' => 'LAPORSP4N', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Layanan pengaduan', 'link' => '#'],
            ['title' => 'LAPORSP4N', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Layanan pengaduan', 'link' => '#']
            // Tambahkan layanan lainnya
        ],
        'applications' => [
            ['title' => 'E-Absensi', 'type' => 'Aplikasi', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Absensi digital', 'link' => '#'],
            ['title' => 'E-Absensi', 'type' => 'Aplikasi', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Absensi digital', 'link' => '#'],
            ['title' => 'E-Absensi', 'type' => 'Aplikasi', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Absensi digital', 'link' => '#'],
            ['title' => 'E-Absensi', 'type' => 'Aplikasi', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Absensi digital', 'link' => '#'],
            ['title' => 'E-Absensi', 'type' => 'Aplikasi', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Absensi digital', 'link' => '#'],
            ['title' => 'E-Absensi', 'type' => 'Aplikasi', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Absensi digital', 'link' => '#']
        ],
        'services' => [
            ['title' => 'Aplikasi PPID', 'type' => 'Pelayanan', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'PPID management', 'link' => '#'],
            ['title' => 'Aplikasi PPID', 'type' => 'Pelayanan', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'PPID management', 'link' => '#'],
            ['title' => 'Aplikasi PPID', 'type' => 'Pelayanan', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'PPID management', 'link' => '#'],
            ['title' => 'Aplikasi PPID', 'type' => 'Pelayanan', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'PPID management', 'link' => '#'],
            ['title' => 'Aplikasi PPID', 'type' => 'Pelayanan', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'PPID management', 'link' => '#'],
            ['title' => 'Aplikasi PPID', 'type' => 'Pelayanan', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'PPID management', 'link' => '#']
        ],
        'websites' => [
            ['title' => 'LAPORSP4N', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Layanan pengaduan', 'link' => '#'],
            ['title' => 'LAPORSP4N', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Layanan pengaduan', 'link' => '#'],
            ['title' => 'LAPORSP4N', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Layanan pengaduan', 'link' => '#'],
            ['title' => 'LAPORSP4N', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Layanan pengaduan', 'link' => '#'],
            ['title' => 'LAPORSP4N', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Layanan pengaduan', 'link' => '#'],
            ['title' => 'LAPORSP4N', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Layanan pengaduan', 'link' => '#']
        ],
        
    ]
])
    @include('partials.features')
    @include('partials.message')


    <!-- Add other sections here -->
@endsection

