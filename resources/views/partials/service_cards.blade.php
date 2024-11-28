<div class="horizontal-layout">
    @foreach ($services as $service)
        <div class="service-card">
            <div class="card shadow border-0">
                <img src="{{ $service['image'] }}" class="card-img-top" alt="{{ $service['title'] }}">
                <div class="card-body text-center">
                    <span class="badge bg-primary mb-2">{{ $service['type'] }}</span>
                    <h5 class="card-title">{{ $service['title'] }}</h5>
                    <p class="card-text">{{ $service['description'] }}</p>
                    <a href="{{ $service['link'] }}" class="btn btn-outline-primary btn-sm">Visit</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
