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
                        <i class="fas fa-book me-2"></i> Sejarah
                    </li>
                </ol>
            </nav>
            <div class="content p-5 bg-white shadow rounded">
                <div class="text-center mb-4">
                    <h1 class="fw-bold text-danger">Sejarah Kota Pariaman</h1>
                    <hr class="w-25 mx-auto" style="border: 2px solid #a51212;">
                </div>

                <div class="history">
                    <h3 class="text-danger"><i class="fas fa-history"></i> Asal Usul:</h3>
                    <p class="fs-5 text-muted">
                        Kota Pariaman, yang terletak di pesisir barat Sumatera, memiliki sejarah yang kaya sebagai salah satu pusat perdagangan maritim di masa lalu. Nama Pariaman diyakini berasal dari kata "Pari" yang berarti peri atau bidadari, menggambarkan keindahan alamnya yang memikat.
                    </p>
                </div>
                <div class="timeline mt-4">
                    <h3 class="text-danger"><i class="fas fa-calendar-alt"></i> Perkembangan Sejarah:</h3>
                    <ul class="list-group list-group-flush fs-5 mt-3">
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i> Pada abad ke-15, Pariaman menjadi salah satu pelabuhan penting untuk perdagangan rempah-rempah.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i> Pada masa penjajahan Belanda, Pariaman menjadi bagian dari jalur strategis kolonial.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i> Pada tahun 2002, Pariaman resmi menjadi kota otonom yang terpisah dari Kabupaten Padang Pariaman.
                        </li>
                    </ul>
                </div>

                <div class="today mt-4">
                    <h3 class="text-danger"><i class="fas fa-building"></i> Kota Pariaman Saat Ini:</h3>
                    <p class="fs-5 text-muted">
                        Saat ini, Kota Pariaman dikenal sebagai salah satu destinasi wisata utama di Sumatera Barat dengan pantai-pantainya yang indah, kebudayaan yang unik, dan masyarakat yang ramah. Kota ini terus berkembang dengan memadukan sejarah dan modernitas.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
