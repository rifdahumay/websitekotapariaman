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
                        <i class="fas fa-shield-alt me-2"></i> Lambang Kota
                    </li>
                </ol>
            </nav>

            <div class="content p-5 bg-white shadow rounded">
                <div class="text-center mb-4">
                    <h1 class="fw-bold gradient-text fw-bold">Lambang Kota Pariaman</h1>
                    <hr class="w-25 mx-auto" style="border: 2px solid #a51212;">
                </div>

                <div class="text-center mb-4">
                    <img src="/logos/Lambang_Kota_Pariaman.png" alt="Lambang Kota Pariaman" class="img-fluid shadow-sm rounded" style="max-height: 300px;">
                </div>

                <div class="description">
                    <h3 class="text-danger"><i class="fas fa-info-circle"></i> Makna Lambang:</h3>
                    <p class="fs-5 text-muted mt-3">
                        Lambang Kota Pariaman mencerminkan keindahan, semangat, dan identitas budaya yang kuat dari masyarakatnya. Setiap elemen dalam lambang memiliki arti yang mendalam, yang meliputi:
                    </p>
                    <ul class="list-group list-group-flush fs-5 mt-3">
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i> **Bintang Emas** melambangkan keimanan dan ketakwaan masyarakat Kota Pariaman.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i> **Gunung** melambangkan kekayaan alam dan tanah yang subur.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i> **Laut dan Ombak** melambangkan Kota Pariaman sebagai daerah pesisir dengan sektor pariwisata maritim.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i> **Padi dan Kapas** melambangkan kemakmuran dan kesejahteraan masyarakat.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i> **Lingkaran Hijau** melambangkan persatuan, keharmonisan, dan kelestarian lingkungan.
                        </li>
                    </ul>
                </div>

                <div class="text-center mt-4">
                    <p class="fs-5 fst-italic text-muted">
                        Dengan lambang ini, Kota Pariaman mengukuhkan identitasnya sebagai kota yang menjunjung tinggi budaya, semangat kerja, dan semangat untuk berkembang menuju masa depan yang lebih baik.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
