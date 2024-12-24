@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb" class="my-3">
    <ol class="breadcrumb bg-light p-3 rounded">
        <li class="breadcrumb-item">
            <a href="{{ route('landing') }}" class="text-decoration-none text-danger">
                <i class="bi bi-house-door"></i> Beranda
            </a>
        </li>
        <li class="breadcrumb-item active text-secondary" aria-current="page">
            Data Terkini
        </li>
    </ol>
</nav>

<div class="container mt-5">
    <h1 class="mb-4 text-center gradient-text fw-bold">Data Terkini</h1>

    <div class="mb-5">
        <h4 class="text-danger">Statistik</h4>
        <ul class="list-group shadow-sm">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Total Items:</strong> 
                <span>{{ $statistics['total_items'] }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Last Updated:</strong> 
                <span>{{ $statistics['last_updated'] }}</span>
            </li>
        </ul>
    </div>

    <div class="d-flex flex-wrap gap-4 justify-content-center">
        @foreach ($data as $item)
            <div class="card shadow-sm border-0" style="width: 22%; min-width: 250px;">
                <img src="{{ $item['image'] }}" class="card-img-top" alt="Card image">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title text-danger">{{ $item['title'] }}</h5>
                    <p class="card-text text-muted small">{{ Str::limit($item['description'], 100, '...') }}</p>
                    <a href="#!" class="btn btn-gradient-border mt-auto">Lihat Detail</a>
                </div>
                <div class="card-footer bg-light border-0">
                    <small class="text-muted">Dipublikasikan: {{ $item['date'] }}</small>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .gradient-text {
        background: linear-gradient(90deg, #ff0000, #0000ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .btn-gradient-border {
        border: 2px solid;
        border-image-slice: 1;
        border-image-source: linear-gradient(90deg, #ff0000, #0000ff);
        background-color: transparent;
        color: #ff0000;
        font-weight: bold;
        transition: all 0.3s ease-in-out;
    }

    .btn-gradient-border:hover {
        background: linear-gradient(90deg, #ff0000, #0000ff);
        color: #ffffff;
    }
</style>
@endsection
