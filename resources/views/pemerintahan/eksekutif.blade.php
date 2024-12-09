@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="breadcrumb-container d-flex align-items-center mb-4 bg-light p-3 rounded shadow-sm">
        <nav aria-label="breadcrumb" class="flex-grow-1">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('landing') }}" class="text-primary">
                        <i class="bi bi-house-door"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('pemerintahan.eksekutif') }}" class="text-primary">
                        <i class="bi bi-building"></i> Pemerintahan
                    </a>
                </li>
                <li class="breadcrumb-item active text-dark" aria-current="page">
                    <i class="bi bi-person-badge"></i> Eksekutif
                </li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-3">
            @include('pemerintahan.sidebar')
        </div>
        <div class="col-md-9">
            <h1 class="text-center gradient-text fw-bold">Eksekutif</h1>
            <p class="fs-5 text-muted text-center">Informasi tentang badan eksekutif di Kota Pariaman.</p>
            <div class="content bg-white shadow rounded p-5">
                <div class="row g-4">
                    @foreach($pejabat as $p)
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <img src="{{ $p['foto'] }}" class="card-img-top" alt="Foto {{ $p['nama'] }}">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $p['nama'] }}</h5>
                                <p class="card-text text-center">
                                    <strong>{{ $p['jabatan'] }}</strong> <br>
                                    Periode: {{ $p['periode'] }}
                                </p>
                                <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#detailModal{{ $p['id'] }}">
                                    Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="detailModal{{ $p['id'] }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $p['id'] }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailModalLabel{{ $p['id'] }}">{{ $p['nama'] }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="d-flex">
                                        <img src="{{ $p['foto'] }}" alt="Foto {{ $p['nama'] }}" class="img-fluid me-3" style="width: 150px; height: auto;">
                                        <div>
                                            <p><strong>Jabatan:</strong> {{ $p['jabatan'] }}</p>
                                            <p><strong>Periode:</strong> {{ $p['periode'] }}</p>
                                            <p><strong>Deskripsi:</strong> {{ $p['deskripsi'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .breadcrumb a {
        text-decoration: none;
        transition: color 0.2s ease;
        display: flex;
        align-items: center;
    }

    .breadcrumb a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .breadcrumb i {
        margin-right: 5px;
    }

    .card {
        border: none;
        border-radius: 10px;
    }

    .card img {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 200px;
        object-fit: cover;
    }
    
</style>
