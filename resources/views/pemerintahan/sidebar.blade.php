<div class="list-group shadow-sm rounded-3 overflow-hidden">
    <!-- Beranda -->
    <a href="{{ route('landing') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('landing') ? 'active' : '' }}">
        <i class="bi bi-house-door me-3 fs-5 text-primary"></i> 
        <span class="fw-semibold">Beranda</span>
    </a>

    <!-- Eksekutif -->
    <a href="{{ route('pemerintahan.eksekutif') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/eksekutif') ? 'active' : '' }}">
        <i class="bi bi-people me-3 fs-5 text-warning"></i> 
        <span class="fw-semibold">Eksekutif</span>
    </a>

    <!-- Legislatif -->
    <a href="{{ route('pemerintahan.legislatif') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/legislatif') ? 'active' : '' }}">
        <i class="bi bi-person-video me-3 fs-5 text-danger"></i> 
        <span class="fw-semibold">Legislatif</span>
    </a>

    <!-- Perangkat Daerah -->
    <a href="{{ route('pemerintahan.perangkat_daerah') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/perangkat-daerah') ? 'active' : '' }}">
        <i class="bi bi-gear me-3 fs-5 text-success"></i> 
        <span class="fw-semibold">Perangkat Daerah</span>
    </a>

    <!-- Kecamatan -->
    <a href="{{ route('pemerintahan.kecamatan') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/kecamatan') ? 'active' : '' }}">
        <i class="bi bi-geo me-3 fs-5 text-info"></i> 
        <span class="fw-semibold">Kecamatan</span>
    </a>

    <!-- Desa -->
    <a href="{{ route('pemerintahan.desa') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/desa') ? 'active' : '' }}">
        <i class="bi bi-building me-3 fs-5 text-primary"></i> 
        <span class="fw-semibold">Desa</span>
    </a>

    <!-- Kelurahan -->
    <a href="{{ route('pemerintahan.kelurahan') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/kelurahan') ? 'active' : '' }}">
        <i class="bi bi-clipboard-data me-3 fs-5 text-secondary"></i> 
        <span class="fw-semibold">Kelurahan</span>
    </a>
</div>
