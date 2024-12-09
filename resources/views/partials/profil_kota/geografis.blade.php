@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">

        <div class="col-md-3">
            @include('partials.profil_kota.sidebar')
        </div>

        <div class="col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white shadow-sm p-3 rounded" style="background: linear-gradient(to right, #f9f9f9, #ffffff);">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/landing') }}" class="text-decoration-none text-danger d-flex align-items-center">
                            <i class="fas fa-home me-2"></i> Beranda
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#profilDropdown" class="text-decoration-none text-danger d-flex align-items-center">
                            <i class="fas fa-city me-2"></i> Profil Kota
                        </a>
                    </li>
                    <li class="breadcrumb-item active d-flex align-items-center" aria-current="page">
                        <i class="fas fa-map-marked-alt me-2"></i> Geografis
                    </li>
                </ol>
            </nav>

            <div class="content p-5 bg-white shadow rounded">
                <div class="text-center mb-4">
                    <h1 class="fw-bold gradient-text fw-bold">Geografis Kota Pariaman</h1>
                    <hr class="w-25 mx-auto" style="border: 2px solid #a51212;">
                </div>

                <div class="map text-center mb-4">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15937.812846072653!2d100.07283774999998!3d-0.6258211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8a6e68a43ad%3A0x8e8c4d9a7e4d6d28!2sPariaman%2C%20Kota%20Pariaman%2C%20Sumatera%20Barat!5e0!3m2!1sen!2sid!4v1692470385619!5m2!1sen!2sid" 
                        width="100%" 
                        height="400" 
                        style="border:0; border-radius: 10px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="description">
                    <h3 class="text-danger"><i class="fas fa-globe"></i> Lokasi dan Batas Wilayah:</h3>
                    <p class="fs-5 text-muted">
                        Kota Pariaman terletak di pesisir barat Pulau Sumatera, Sumatera Barat. Kota ini memiliki lokasi strategis sebagai salah satu daerah tujuan wisata dan pusat aktivitas ekonomi.
                    </p>
                    <ul class="list-group list-group-flush fs-5 mt-3">
                        <li class="list-group-item">
                            <i class="fas fa-arrow-right text-success"></i> **Sebelah Utara**: Berbatasan dengan Kabupaten Padang Pariaman.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-arrow-right text-success"></i> **Sebelah Selatan**: Berbatasan dengan Kabupaten Padang Pariaman.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-arrow-right text-success"></i> **Sebelah Timur**: Berbatasan dengan Kabupaten Padang Pariaman.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-arrow-right text-success"></i> **Sebelah Barat**: Berbatasan dengan Samudera Hindia.
                        </li>
                    </ul>
                </div>

                <div class="topography mt-4">
                    <h3 class="text-danger"><i class="fas fa-mountain"></i> Topografi dan Iklim:</h3>
                    <p class="fs-5 text-muted">
                        Kota Pariaman memiliki topografi yang bervariasi, mulai dari dataran rendah hingga kawasan pesisir. Iklimnya termasuk ke dalam iklim tropis dengan curah hujan tinggi sepanjang tahun, menjadikannya daerah yang subur.
                    </p>
                </div>

                <div class="population mt-4">
                    <h3 class="text-danger"><i class="fas fa-people-arrows"></i> Luas Wilayah dan Penduduk:</h3>
                    <ul class="list-group list-group-flush fs-5 mt-3">
                        <li class="list-group-item">
                            <i class="fas fa-ruler-combined text-success"></i> **Luas Wilayah**: Sekitar 73,36 km².
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-user-friends text-success"></i> **Jumlah Penduduk**: Diperkirakan lebih dari 90.000 jiwa.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-tree text-success"></i> **Kepadatan Penduduk**: Mayoritas penduduk bermukim di daerah pesisir dengan aktivitas utama di sektor perikanan dan pariwisata.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
