@php
    // Fallback data untuk $news jika belum didefinisikan
    $news = $news ?? [
        [
            'title' => 'Default News Title 1',
            'description' => 'Default news description for slide 1.',
            'date' => '1 Januari 2025',
        ],
        [
            'title' => 'Default News Title 2',
            'description' => 'Default news description for slide 2.',
            'date' => '2 Januari 2025',
        ],
    ];
@endphp

<div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($news as $index => $item)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="d-flex flex-column align-items-start p-4 bg-light rounded">
                    <h4 class="text-primary fw-bold">{{ $item['title'] }}</h4>
                    <p class="text-secondary">{{ $item['description'] }}</p>
                    <span class="text-muted small">{{ $item['date'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
