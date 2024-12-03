@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Breadcrumb -->
    <div class="breadcrumb-container d-flex align-items-center mb-4 bg-light p-3 rounded shadow-sm">
        <nav aria-label="breadcrumb" class="flex-grow-1">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('landing') }}" class="text-primary">
                        <i class="bi bi-house-door"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('pemerintahan.kecamatan') }}" class="text-primary">
                        <i class="bi bi-building"></i> Pemerintahan
                    </a>
                </li>
                <li class="breadcrumb-item active text-dark" aria-current="page">
                    <i class="bi bi-geo-alt"></i> Kecamatan
                </li>
            </ol>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            @include('pemerintahan.sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <h1 class="text-center text-danger">Kecamatan</h1>
            <p class="fs-5 text-muted text-center">Informasi tentang kecamatan di Kota Pariaman.</p>
            <div class="content bg-white shadow rounded p-5">
                <p>
                    Kota Pariaman terdiri atas beberapa kecamatan yang menjadi pembagian wilayah administrasi
                    untuk mempermudah pengelolaan pemerintahan.
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
