<!-- resources/views/partials/service_cards.blade.php -->
<div class="row g-3 justify-content-center">
    @foreach ($services as $service)
        <div class="col-md-4 col-sm-6 col-lg-3">
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

