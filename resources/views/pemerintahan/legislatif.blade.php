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
                    <a href="{{ route('pemerintahan.legislatif') }}" class="text-primary">
                        <i class="bi bi-building"></i> Pemerintahan
                    </a>
                </li>
                <li class="breadcrumb-item active text-dark" aria-current="page">
                    <i class="bi bi-person-lines-fill"></i> Legislatif
                </li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-3">
            @include('pemerintahan.sidebar')
        </div>
        <div class="col-md-9">
            <h1 class="text-center gradient-text fw-bold">Legislatif</h1>
            <p class="fs-5 text-muted text-center">Informasi tentang badan legislatif di Kota Pariaman.</p>
            <div class="content bg-white shadow rounded p-5">
                <div class="row g-4">
                    @foreach($anggota as $a)
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <img src="{{ $a['foto'] }}" class="card-img-top" alt="Foto {{ $a['nama'] }}">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $a['nama'] }}</h5>
                                <p class="card-text text-center">
                                    <strong>{{ $a['jabatan'] }}</strong> <br>
                                    Periode: {{ $a['periode'] }}
                                </p>
                                <button class="btn btn-gradient-border w-100" data-bs-toggle="modal" data-bs-target="#detailModal{{ $a['id'] }}">
                                    Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="detailModal{{ $a['id'] }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $a['id'] }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailModalLabel{{ $a['id'] }}">{{ $a['nama'] }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="d-flex">
                                        <img src="{{ $a['foto'] }}" alt="Foto {{ $a['nama'] }}" class="img-fluid me-3" style="width: 150px; height: auto;">
                                        <div>
                                            <p><strong>Jabatan:</strong> {{ $a['jabatan'] }}</p>
                                            <p><strong>Periode:</strong> {{ $a['periode'] }}</p>
                                            <p><strong>Deskripsi:</strong> {{ $a['deskripsi'] }}</p>
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
