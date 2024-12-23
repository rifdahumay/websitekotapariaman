<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($data as $item)
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ $item['image'] }}" class="card-img-top" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title" style="color: #a51212;">{{ $item['title'] }}</h5>
                    <p class="card-text text-muted">{{ $item['description'] }}</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Lihat Selengkapnya</a>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <small class="text-muted">{{ $item['date'] }}</small>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="text-center mt-4">
    <a href="{{ route('data-terkini') }}" class="btn btn-outline-danger">Lihat Semua Data</a>
</div>
