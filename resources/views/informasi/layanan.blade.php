@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
<section id="public-services" class="container my-5">
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb bg-light p-2 rounded">
            <li class="breadcrumb-item">
                <a href="{{ route('landing') }}" class="text-primary hover:text-decoration-underline">
                    <i class="fas fa-home"></i> Beranda
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <i class="fas fa-cogs"></i> Layanan
            </li>
        </ol>
    </nav>


    <div class="text-center mb-4">
        <h2 class="fw-bold headline-title">Informasi Layanan Publik</h2>
    </div>
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">Show All</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="applications-tab" data-bs-toggle="pill" data-bs-target="#applications" type="button" role="tab" aria-controls="applications" aria-selected="false">Aplikasi</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="services-tab" data-bs-toggle="pill" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">Pelayanan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="websites-tab" data-bs-toggle="pill" data-bs-target="#websites" type="button" role="tab" aria-controls="websites" aria-selected="false">Website</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
            <div class="row">
                @include('informasi.service_cards', ['services' => $services['all']])
            </div>
        </div>
        <div class="tab-pane fade" id="applications" role="tabpanel" aria-labelledby="applications-tab">
            <div class="row">
                @include('informasi.service_cards', ['services' => $services['applications']])
            </div>
        </div>
        <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
            <div class="row">
                @include('informasi.service_cards', ['services' => $services['services']])
            </div>
        </div>
        <div class="tab-pane fade" id="websites" role="tabpanel" aria-labelledby="websites-tab">
            <div class="row">
                @include('informasi.service_cards', ['services' => $services['websites']])
            </div>
        </div>
    </div>
</section>

<style>
    /* Efek Hover pada Link */
.breadcrumb a {
    color: #007bff; /* Biru */
    transition: color 0.3s ease, transform 0.3s ease; /* Transisi halus */
}

.breadcrumb a:hover {
    color: #0056b3; /* Warna biru yang lebih gelap saat hover */
    text-decoration: underline;
    transform: translateY(-2px); /* Efek mengangkat sedikit saat hover */
}

/* Mengubah breadcrumb aktif dengan warna lebih ringan */
.breadcrumb .breadcrumb-item.active {
    color: #6c757d; /* Warna abu-abu yang lebih ringan */
}

/* Memberikan padding ekstra agar breadcrumb lebih terlihat */
.breadcrumb {
    padding-left: 20px;
    padding-right: 20px;
}

</style>
@endsection
