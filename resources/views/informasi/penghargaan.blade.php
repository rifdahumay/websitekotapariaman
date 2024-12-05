@extends('layouts.app')

@section('title', 'Penghargaan')

@section('content')
<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-3 rounded shadow-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('landing') }}" class="text-decoration-none text-dark">
                    <i class="bi bi-house-door"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <i class="bi bi-trophy"></i> Penghargaan
            </li>
        </ol>
    </nav>

    <div class="text-center mb-4">
        <h1 class="fw-bold">Penghargaan</h1>
        <p>Stay updated with the latest news and trends in development and technology.</p>
    </div>
    <div class="d-flex flex-wrap justify-content-center gap-4">
        <div class="card shadow-sm" style="width: 18rem;">
            <img src="/images/7fead525bc44554d3dc5b4adb6906ae9.jpg" class="card-img-top" alt="Artikel 1">
            <div class="card-body">
                <h5 class="card-title">Business Intelligence In Mobile App Development</h5>
                <p class="card-text text-muted">
                    The world of website development brings changes every single year and makes it...
                </p>
                <p class="card-text text-muted">
                    <i class="bi bi-calendar-event"></i> December 3, 2024
                </p>
            </div>
            <div class="card-footer text-center bg-white border-0">
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem;">
            <img src="/images/7fead525bc44554d3dc5b4adb6906ae9.jpg" class="card-img-top" alt="Artikel 2">
            <div class="card-body">
                <h5 class="card-title">5 Reasons Why App Developers Should Partner...</h5>
                <p class="card-text text-muted">
                    The world of website development brings changes every single year and makes it...
                </p>
                <p class="card-text text-muted">
                    <i class="bi bi-calendar-event"></i> December 3, 2024
                </p>
            </div>
            <div class="card-footer text-center bg-white border-0">
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem;">
            <img src="/images/7fead525bc44554d3dc5b4adb6906ae9.jpg" class="card-img-top" alt="Artikel 3">
            <div class="card-body">
                <h5 class="card-title">12 Web Development Trends For 2022 And Beyond</h5>
                <p class="card-text text-muted">
                    The world of website development brings changes every single year and makes it...
                </p>
                <p class="card-text text-muted">
                    <i class="bi bi-calendar-event"></i> December 3, 2024
                </p>
            </div>
            <div class="card-footer text-center bg-white border-0">
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem;">
            <img src="/images/7fead525bc44554d3dc5b4adb6906ae9.jpg" class="card-img-top" alt="Artikel 4">
            <div class="card-body">
                <h5 class="card-title">12 Web Development Trends For 2022 And Beyond</h5>
                <p class="card-text text-muted">
                    The world of website development brings changes every single year and makes it...
                </p>
                <p class="card-text text-muted">
                    <i class="bi bi-calendar-event"></i> December 3, 2024
                </p>
            </div>
            <div class="card-footer text-center bg-white border-0">
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>
@endsection
