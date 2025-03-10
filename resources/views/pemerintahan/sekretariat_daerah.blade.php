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
                    <a href="{{ route('pemerintahan.sekretariat_daerah') }}" class="text-primary">
                        <i class="bi bi-building"></i> Pemerintahan
                    </a>
                </li>
                <li class="breadcrumb-item active text-dark" aria-current="page">
                    <i class="bi bi-file-earmark-text"></i> Sekretariat Daerah
                </li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-3">
            @include('pemerintahan.sidebar')
        </div>
        <div class="col-md-9">
            <h1 class="text-center gradient-text fw-bold">Sekretariat Daerah</h1>
            <p class="fs-5 text-muted text-center">Informasi tentang Sekretariat Daerah di Kota Pariaman.</p>
            <div class="content bg-white shadow rounded p-5">
                <p>
                    Sekretariat Daerah adalah lembaga yang mendukung kelancaran administrasi dan pelaksanaan kebijakan
                    pemerintahan di tingkat daerah.
                </p>
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
</style>
