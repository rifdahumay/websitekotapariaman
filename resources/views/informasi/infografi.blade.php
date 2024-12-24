@extends('layouts.app')

@section('title', 'Infografis')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="my-3">
            <ol class="breadcrumb bg-light p-3 rounded">
                <li class="breadcrumb-item">
                    <a href="{{ route('landing') }}" style="color: #a51212; text-decoration: none;">
                        <i class="bi bi-house-door"></i> Beranda
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d;">
                    Infografis
                </li>
            </ol>
        </nav>

        <h1 class="my-4 text-center" style="color: #a51212;">Infografis</h1>
        <p class="text-center mb-4">Berikut adalah koleksi infografis terbaru:</p>

        <div class="d-flex flex-wrap justify-content-center gap-4">
            @php
                $infographics = [
                    [
                        'judul' => 'Pentingnya Kebersihan Lingkungan',
                        'tanggal' => '2024-12-01',
                        'gambar' => '/logos/Cover image.png',
                        'file' => '/files/kebersihan-lingkungan.pdf',
                    ],
                    [
                        'judul' => 'Tips Menghemat Energi di Rumah',
                        'tanggal' => '2024-12-05',
                        'gambar' => '/logos/Cover image.png',
                        'file' => '/files/hemat-energi.pdf',
                    ],
                    [
                        'judul' => 'Panduan Mengurangi Sampah Plastik',
                        'tanggal' => '2024-12-10',
                        'gambar' => '/logos/Cover image.png',
                        'file' => '/files/mengurangi-sampah-plastik.pdf',
                    ],
                    [
                        'judul' => 'Manfaat Bersepeda untuk Kesehatan',
                        'tanggal' => '2024-12-15',
                        'gambar' => '/logos/Cover image.png',
                        'file' => '/files/bersepeda-kesehatan.pdf',
                    ],
                    [
                        'judul' => 'Peran Teknologi Dalam Pendidikan',
                        'tanggal' => '2024-12-20',
                        'gambar' => '/logos/Cover image.png',
                        'file' => '/files/teknologi-pendidikan.pdf',
                    ],
                    [
                        'judul' => 'Pola Hidup Sehat untuk Produktivitas',
                        'tanggal' => '2024-12-25',
                        'gambar' => '/logos/Cover image.png',
                        'file' => '/files/hidup-sehat.pdf',
                    ],
                ];
            @endphp

            @foreach ($infographics as $infographic)
                <div class="card shadow-sm" style="width: 18rem;">
                    <img src="{{ $infographic['gambar'] }}" class="card-img-top" alt="{{ $infographic['judul'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">{{ $infographic['judul'] }}</h5>
                        <p class="text-muted mb-2">
                            <small><i class="bi bi-calendar-check"></i> Dipublikasikan: {{ $infographic['tanggal'] }}</small>
                        </p>
                        <div class="mt-auto">
                            <a href="{{ $infographic['file'] }}" target="_blank" class="btn btn-success mb-2 w-100">
                                <i class="bi bi-download"></i> Unduh Infografis
                            </a>
                            <button type="button" class="btn btn-primary w-100" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#detailModal" 
                                    data-title="{{ $infographic['judul'] }}" 
                                    data-image="{{ $infographic['gambar'] }}" 
                                    data-date="{{ $infographic['tanggal'] }}">
                                <i class="bi bi-eye"></i> Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Infografis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Infografis" class="img-fluid mb-3">
                    <h5 id="modalTitle" class="text-primary"></h5>
                    <p id="modalDate" class="text-muted"><i class="bi bi-calendar-check"></i> Dipublikasikan: </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const detailModal = document.getElementById('detailModal');
        detailModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const title = button.getAttribute('data-title');
            const image = button.getAttribute('data-image');
            const date = button.getAttribute('data-date');

            const modalTitle = detailModal.querySelector('#modalTitle');
            const modalImage = detailModal.querySelector('#modalImage');
            const modalDate = detailModal.querySelector('#modalDate');

            modalTitle.textContent = title;
            modalImage.src = image;
            modalDate.textContent = `Dipublikasikan: ${date}`;
        });
    </script>
@endsection
