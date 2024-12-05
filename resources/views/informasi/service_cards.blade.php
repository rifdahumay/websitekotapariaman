@foreach ($services as $service)
<div class="service-card-horizontal d-flex align-items-center mb-4 p-3 border rounded shadow-sm bg-light" style="transition: transform 0.3s, box-shadow 0.3s;">
    <div class="service-image me-3">
        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="img-fluid rounded" style="width: 90px; height: auto;">
    </div>
    <div class="service-content flex-grow-1">
        <h5 class="fw-bold mb-2 text-primary">{{ $service['title'] }}</h5>
        <p class="mb-1 text-secondary"><strong>Kategori:</strong> {{ $service['type'] }}</p>
        <p class="mb-1 text-muted"><strong>Website:</strong> <a href="{{ $service['link'] }}" target="_blank" class="text-decoration-underline">{{ $service['link'] }}</a></p>
        <p class="mb-2">{{ $service['description'] }}</p>
    </div>
    <div class="service-action">
        <a href="{{ $service['link'] }}" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
    </div>
</div>
@endforeach

<style>
    .service-card-horizontal {
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
    }

    .service-card-horizontal:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        background-color: #f8f9fa;
    }

    .service-image img {
        max-height: 100px;
        transition: transform 0.3s;
    }

    .service-card-horizontal:hover .service-image img {
        transform: scale(1.05);
    }

    .service-content a {
        transition: color 0.3s;
    }

    .service-content a:hover {
        color: #0056b3;
    }

    .service-action {
        flex-shrink: 0;
        margin-left: 10px;
    }

    @media (max-width: 768px) {
        .service-card-horizontal {
            flex-direction: column;
            text-align: center;
        }

        .service-image {
            margin-bottom: 10px;
        }

        .service-action {
            margin-left: 0;
            margin-top: 10px;
        }
    }
</style>
