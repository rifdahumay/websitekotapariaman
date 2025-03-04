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
                        <i class="fas fa-book me-2"></i> Sejarah
                    </li>
                </ol>
            </nav>
            
            <div class="content p-5 bg-white shadow rounded">
                <div class="text-center mb-4">
                    <h1 class="gradient-text fw-bold">Sejarah Kota Pariaman</h1>
                    <hr class="w-25 mx-auto" style="border: 2px solid #a51212;">
                </div>

                @forelse($sejarah as $item)
                    <div class="history">
                        <h3 class="text-danger"><i class="fas fa-history"></i> {{ $item->title }}</h3>
                        <p class="fs-5 text-muted">{{ $item->asal_usul }}</p>
                    </div>

                    <div class="timeline mt-4">
                        <h3 class="text-danger"><i class="fas fa-calendar-alt"></i> Perkembangan Sejarah:</h3>
                        <p class="fs-5 text-muted">{{ $item->perkembangan_sejarah }}</p>
                    </div>

                    <div class="today mt-4">
                        <h3 class="text-danger"><i class="fas fa-building"></i> Kota Pariaman Saat Ini:</h3>
                        <p class="fs-5 text-muted">{{ $item->kota_pariaman_saat_ini }}</p>
                    </div>

                    <hr class="my-4">
                @empty
                    <p class="fs-5 text-muted">Belum ada data sejarah yang tersedia.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
