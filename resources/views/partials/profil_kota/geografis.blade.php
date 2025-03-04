@extends('layouts.app')

@section('content')
<div class="container mb-5 pb-5">
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
                    <h1 class="gradient-text fw-bold">Geografis Kota Pariaman</h1>
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

                @forelse ($geografis as $item)
                    <div class="mb-3">
                        <h4 class="text-danger mt-3"><i class="fas fa-globe"></i> Lokasi dan Batas Wilayah:</h4>
                        <p class="fs-5 text-muted">{{ $item->location_boundary }}</p>
                    </div>

                    <div class="mb-3">
                        <h4 class="text-danger mt-3"><i class="fas fa-mountain"></i> Topografi dan Iklim:</h4>
                        <p class="fs-5 text-muted">{{ $item->topography_climate }}</p>
                    </div>

                    <div class="mb-3">
                        <h4 class="text-danger mt-3"><i class="fas fa-people-arrows"></i> Luas Wilayah dan Penduduk:</h4>
                        <p class="fs-5 text-muted">{{ $item->area_population }}</p>
                    </div>
                @empty
                    <p class="fs-5 text-muted">Data Geografis tidak ditemukan.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
