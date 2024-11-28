<div class="list-group shadow-sm rounded-3 overflow-hidden">
    <a href="{{ route('profil_kota.visimisi') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('profil_kota/visimisi') ? 'active' : '' }}">
        <i class="bi bi-eye me-3 fs-5 text-primary"></i> 
        <span class="fw-semibold">Visi Misi</span>
    </a>
    <a href="{{ route('profil_kota.sejarah') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('profil_kota/sejarah') ? 'active' : '' }}">
        <i class="bi bi-book me-3 fs-5 text-warning"></i> 
        <span class="fw-semibold">Sejarah</span>
    </a>
    <a href="{{ route('profil_kota.lambang') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('profil_kota/lambang') ? 'active' : '' }}">
        <i class="bi bi-shield me-3 fs-5 text-danger"></i> 
        <span class="fw-semibold">Lambang Kota</span>
    </a>
    <a href="{{ route('profil_kota.geografis') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('profil_kota/geografis') ? 'active' : '' }}">
        <i class="bi bi-geo-alt me-3 fs-5 text-success"></i> 
        <span class="fw-semibold">Geografis</span>
    </a>
    <a href="{{ route('profil_kota.demografi') }}" 
       class="list-group-item list-group-item-action d-flex align-items-center {{ Request::is('profil_kota/demografi') ? 'active' : '' }}">
        <i class="bi bi-people me-3 fs-5 text-info"></i> 
        <span class="fw-semibold">Demografi</span>
    </a>
</div>
