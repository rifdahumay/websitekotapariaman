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
                        <i class="fas fa-book me-2"></i> Lambang Kota
                    </li>
                </ol>
            </nav>

            <div class="content p-5 bg-white shadow rounded">
                <div class="text-center mb-4">
                    <h1 class="fw-bold gradient-text">Lambang Kota Pariaman</h1>
                    <hr class="w-25 mx-auto" style="border: 2px solid #a51212;">
                </div>

                @forelse ($lambang_kota as $item)
                    <div class="text-center mb-4">
                        <!-- Perbaikan pada path gambar -->
                        <img src="{{ Storage::url($item->image) }}" alt="Lambang Kota" 
                            class="img-fluid shadow-sm rounded" style="max-height: 300px;">
                    </div>

                    <div class="lambang-description">
                        <h3 class="text-danger"><i class="fas fa-info-circle"></i> Makna Lambang:</h3>
                        <ul class="list-group list-group-flush fs-5 mt-3">
                            @foreach (explode("\n", $item->deskripsi) as $deskripsi)
                                <li class="list-group-item">
                                    <span class="fw-bold text-dark">•</span> {{ $deskripsi }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @empty
                    <p class="fs-5 text-muted text-center">Belum ada data lambang kota yang tersedia.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
