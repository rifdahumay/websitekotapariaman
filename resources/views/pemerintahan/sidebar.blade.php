<div class="list-group shadow-sm rounded-3 overflow-hidden">
    <a href="{{ route('pemerintahan.eksekutif') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/eksekutif') ? 'active' : '' }}">
        <i class="bi bi-person-badge me-3 fs-5 text-primary"></i> 
        <span class="fw-semibold">Eksekutif</span>
    </a>
    <a href="{{ route('pemerintahan.legislatif') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/legislatif') ? 'active' : '' }}">
        <i class="bi bi-bank me-3 fs-5 text-warning"></i> 
        <span class="fw-semibold">Legislatif</span>
    </a>
    <a href="{{ route('pemerintahan.perangkat') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/perangkat') ? 'active' : '' }}">
        <i class="bi bi-diagram-3 me-3 fs-5 text-danger"></i> 
        <span class="fw-semibold">Perangkat Daerah</span>
    </a>
    <a href="{{ route('pemerintahan.sekretariat') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/sekretariat') ? 'active' : '' }}">
        <i class="bi bi-briefcase me-3 fs-5 text-success"></i> 
        <span class="fw-semibold">Sekretariat Daerah</span>
    </a>
    <a href="{{ route('pemerintahan.kecamatan') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/kecamatan') ? 'active' : '' }}">
        <i class="bi bi-map me-3 fs-5 text-info"></i> 
        <span class="fw-semibold">Kecamatan</span>
    </a>
    <a href="{{ route('pemerintahan.desa') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/desa') ? 'active' : '' }}">
        <i class="bi bi-house me-3 fs-5 text-primary"></i> 
        <span class="fw-semibold">Desa</span>
    </a>
    <a href="{{ route('pemerintahan.kelurahan') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('pemerintahan/kelurahan') ? 'active' : '' }}">
        <i class="bi bi-building me-3 fs-5 text-secondary"></i> 
        <span class="fw-semibold">Kelurahan</span>
    </a>
</div>
