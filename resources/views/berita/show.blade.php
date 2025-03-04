@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-light p-3 rounded shadow-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('landing') }}" class="text-primary">
                    <i class="bi bi-house-door"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('berita.index') }}" class="text-primary">
                    <i class="bi bi-newspaper"></i> Berita
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
        </ol>
    </nav>

    <!-- Card Berita Utama -->
    <div class="card shadow-sm mb-4 mx-auto" style="max-width: 100%;">
        <img src="{{ asset('storage/'.$article->image) }}" 
             class="card-img-top" 
             alt="{{ $article->title }}" 
             style="object-fit: cover; height: 400px; width: 100%;">

        <div class="card-body">
            <!-- Judul Berita -->
            <h1 class="card-title fw-bold mb-3">{{ $article->title }}</h1>
            
            <!-- Informasi Tambahan -->
            <div class="mb-3 text-muted">
                <span class="badge bg-primary">{{ $article->category }}</span>
                <span class="ms-3"><i class="bi bi-person"></i> Penulis: {{ $article->penulis }}</span>
                <span class="ms-3"><i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($article->published_at)->format('d F Y') }}</span>
            </div>

            <!-- Konten Berita -->
            <div class="article-content mb-4">
                <p class="fs-5" style="text-align: justify;">
                    {{ $article->description }}
                </p>
            </div>

            <!-- Tombol Kembali -->
            <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> Kembali ke Berita
            </a>
        </div>
    </div>
</div>

@endsection

<!-- Gaya CSS untuk memperindah tampilan -->
<style>
    /* Mengatur ukuran card berita */
    .card {
        max-width: 100%;
        margin: auto;
    }

    /* Menyesuaikan ukuran gambar dalam card */
    .card-img-top {
        height: 400px;
        object-fit: cover;
        width: 100%;
    }

    /* Tampilan teks dan konten */
    .article-content p {
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }

    /* Ukuran judul berita */
    .card-title {
        font-size: 2rem;
        line-height: 1.2;
    }

    /* Breadcrumb style */
    .breadcrumb a {
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .breadcrumb a:hover {
        color: #0056b3;
        text-decoration: underline;
    }
</style>
