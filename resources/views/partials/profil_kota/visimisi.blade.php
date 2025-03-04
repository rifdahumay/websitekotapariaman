@extends('layouts.app')

@section('content')
<div class="container mt-5">
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
                        <i class="fas fa-flag me-2"></i> Visi Misi
                    </li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-8">
                    <div class="content p-5 bg-white shadow rounded">
                        <div class="text-center mb-4">
                            <h1 class="gradient-text fw-bold">Visi dan Misi Kota Pariaman</h1>
                            <hr class="w-25 mx-auto" style="border: 2px solid #a51212;">
                        </div>

                        @forelse ($visi_misi as $item)
                            <div class="visi mb-4">
                                <h3 class="text-danger"><i class="fas fa-eye"></i> Visi:</h3>
                                <p class="fs-5 fst-italic text-muted">
                                    "{{ $item->visi }}"
                                </p>
                            </div>
                            <div class="misi">
                                <h3 class="text-danger"><i class="fas fa-bullseye"></i> Misi:</h3>
                                <ul class="list-group list-group-flush fs-5 mt-3">
                                    @foreach (explode("\n", $item->misi) as $misi)
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success"></i> {{ $misi }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @empty
                            <p class="text-muted">Belum ada data Visi dan Misi yang tersedia.</p>
                        @endforelse
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="border: 1px solid #ccc;">
                        <div class="card-header text-white bg-dark">
                            <h5 class="mb-0 text-center"><i class="fas fa-bullhorn"></i> PENGUMUMAN</h5>
                        </div>
                        <div class="card-body p-3" id="announcementContainer" style="max-height: 1100px; overflow-y: auto;">
                            <div class="announcement-content">
                                @for ($j = 0; $j < 4; $j++) 
                                    <div class="d-flex align-items-center mb-3 hover-news"
                                        style="border: 1px solid #ccc; padding: 10px; border-radius: 8px;">
                                        <img src="/logos/Cover image.png" alt="Thumbnail"
                                            style="width: 80px; height: 80px; border: 2px solid #ccc; border-radius: 10px;"
                                            class="me-3">
                                        <div>
                                            <small class="text-muted">18 Jam Lalu</small>
                                            <p class="mb-0">Morbi habitasse felis nulla arcu, morbi ultrices.</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
