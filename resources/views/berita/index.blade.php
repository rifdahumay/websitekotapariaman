@extends('layouts.app')

@section('content')

    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($news as $key => $article)
                <div class="carousel-item @if ($key == 0) active @endif">
                    <img src="{{ $article['urlToImage'] }}" class="d-block w-100" alt="{{ $article['title'] }}" style="object-fit: cover; height: 500px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-4 font-weight-bold">{{ $article['title'] }}</h5>
                        <p class="lead">{{ Str::limit($article['description'], 100) }}</p>
                        <a href="{{ $article['url'] }}" class="btn btn-danger btn-lg" target="_blank">Baca Selengkapnya</a>
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
        <h2 class="text-center mb-4">Berita Terbaru</h2>
        <div class="row">
            @foreach ($news as $article)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light rounded">
                        <img src="{{ $article['urlToImage'] }}" class="card-img-top" alt="{{ $article['title'] }}" style="object-fit: cover; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{ $article['title'] }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($article['description'], 150) }}</p>
                            <a href="{{ $article['url'] }}" class="btn btn-primary btn-sm" target="_blank">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
