<!-- resources/views/partials/public_services.blade.php -->
<section id="public-services" class="container my-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold headline-title">Informasi Layanan Publik</h2>
    </div>
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">Show All</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="applications-tab" data-bs-toggle="pill" data-bs-target="#applications" type="button" role="tab" aria-controls="applications" aria-selected="false">Aplikasi</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="services-tab" data-bs-toggle="pill" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">Pelayanan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="websites-tab" data-bs-toggle="pill" data-bs-target="#websites" type="button" role="tab" aria-controls="websites" aria-selected="false">Website</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
            <div class="d-flex flex-wrap justify-content-center">
                @include('partials.service_cards', ['services' => $services['all']])
            </div>
        </div>
        <div class="tab-pane fade" id="applications" role="tabpanel" aria-labelledby="applications-tab">
            <div class="d-flex flex-wrap justify-content-center">
                @include('partials.service_cards', ['services' => $services['applications']])
            </div>
        </div>
        <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
            <div class="d-flex flex-wrap justify-content-center">
                @include('partials.service_cards', ['services' => $services['services']])
            </div>
        </div>
        <div class="tab-pane fade" id="websites" role="tabpanel" aria-labelledby="websites-tab">
            <div class="d-flex flex-wrap justify-content-center">
                @include('partials.service_cards', ['services' => $services['websites']])
            </div>
        </div>
    </div>
</section>
