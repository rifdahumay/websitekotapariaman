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

                    <div class="accordion mt-3" id="accordionLambang">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingBintang">
                                <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBintang" aria-expanded="true" aria-controls="collapseBintang">
                                    <i class="fas fa-check-circle text-success"></i> Bintang Emas
                                </button>
                            </h2>
                            <div id="collapseBintang" class="accordion-collapse collapse show" aria-labelledby="headingBintang" data-bs-parent="#accordionLambang">
                                <div class="accordion-body">
                                    Melambangkan keimanan dan ketakwaan masyarakat Kota Pariaman.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingGunung">
                                <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGunung" aria-expanded="false" aria-controls="collapseGunung">
                                    <i class="fas fa-check-circle text-success"></i> Gunung
                                </button>
                            </h2>
                            <div id="collapseGunung" class="accordion-collapse collapse" aria-labelledby="headingGunung" data-bs-parent="#accordionLambang">
                                <div class="accordion-body">
                                    Melambangkan kekayaan alam dan tanah yang subur.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingLaut">
                                <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLaut" aria-expanded="false" aria-controls="collapseLaut">
                                    <i class="fas fa-check-circle text-success"></i> Laut dan Ombak
                                </button>
                            </h2>
                            <div id="collapseLaut" class="accordion-collapse collapse" aria-labelledby="headingLaut" data-bs-parent="#accordionLambang">
                                <div class="accordion-body">
                                    Melambangkan Kota Pariaman sebagai daerah pesisir dengan sektor pariwisata maritim.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPadiKapas">
                                <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePadiKapas" aria-expanded="false" aria-controls="collapsePadiKapas">
                                    <i class="fas fa-check-circle text-success"></i> Padi dan Kapas
                                </button>
                            </h2>
                            <div id="collapsePadiKapas" class="accordion-collapse collapse" aria-labelledby="headingPadiKapas" data-bs-parent="#accordionLambang">
                                <div class="accordion-body">
                                    Melambangkan kemakmuran dan kesejahteraan masyarakat.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingLingkaran">
                                <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLingkaran" aria-expanded="false" aria-controls="collapseLingkaran">
                                    <i class="fas fa-check-circle text-success"></i> Lingkaran Hijau
                                </button>
                            </h2>
                            <div id="collapseLingkaran" class="accordion-collapse collapse" aria-labelledby="headingLingkaran" data-bs-parent="#accordionLambang">
                                <div class="accordion-body">
                                    Melambangkan persatuan, keharmonisan, dan kelestarian lingkungan.
                                </div>
                            </div>
                        </div>
                    </div>
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
