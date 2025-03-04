@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1 class="text-center gradient-text fw-bold">Headline News</h1>
    
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($news as $key => $article)
                <div class="carousel-item @if ($key == 0) active @endif">
                    <img src="{{ asset('storage/'.$article->image) }}" class="d-block w-100" alt="{{ $article->title }}" style="object-fit: cover; height: 500px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-4 font-weight-bold">{{ $article->title }}</h5>
                        <p class="lead">{{ Str::limit($article->description, 100) }}</p>
                        <a href="{{ route('berita.show', ['id' => $article->id]) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                        </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-4 gradient-text fw-bold">Berita Terbaru</h2>
        <div class="row">
            @foreach ($news as $article)
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm border-light rounded">
                        <img src="{{ asset('storage/'.$article->image) }}" class="card-img-top" alt="{{ $article->title }}" style="object-fit: cover; height: 150px;">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{ $article->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($article->description, 150) }}</p>
                            <p><small class="text-muted">Penulis: {{ $article->penulis }}</small></p>
                            <p><small class="text-muted">Tanggal: {{ \Carbon\Carbon::parse($article->published_at)->format('d-m-Y') }}</small></p>
                            <a href="{{ route('berita.show', ['id' => $article->id]) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
