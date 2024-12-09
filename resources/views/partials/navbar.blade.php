<nav class="navbar navbar-expand-lg" id="navbar" style="background: transparent; color: white; font-family: 'Bricolage Grotesque', sans-serif;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="/logos/Lambang_Kota_Pariaman.png" alt="Logo Kota Pariaman" style="height: 50px; margin-right: 5px;">
        </a>
        <div class="d-flex flex-column align-items-start">
            <h1 class="m-0" style="font-size: 13px; font-weight: bold; background: linear-gradient(to right, red, blue); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">WEBSITE RESMI PEMERINTAH</h1>
            <span style="font-size: 13px; font-weight: bold; background: linear-gradient(to right, red, blue); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">KOTA PARIAMAN</span>
            <span style="font-size: 12px; background: linear-gradient(to right, red, blue); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">www.pariamankota.go.id</span>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('landing') ? 'active' : '' }}" href="{{ route('landing') }}" style="background: linear-gradient(to right, red, blue); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 12px;">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('profil-kota/*') ? 'active' : '' }}" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background: linear-gradient(to right, red, blue); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 12px;">
                        Profil Kota
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                        <li><a class="dropdown-item {{ request()->is('profil-kota/visimisi') ? 'active' : '' }}" href="{{ url('/profil-kota/visimisi') }}">Visi Misi</a></li>
                        <li><a class="dropdown-item {{ request()->is('profil-kota/sejarah') ? 'active' : '' }}" href="/profil-kota/sejarah">Sejarah</a></li>
                        <li><a class="dropdown-item {{ request()->is('profil-kota/lambang') ? 'active' : '' }}" href="/profil-kota/lambang">Lambang Kota</a></li>
                        <li><a class="dropdown-item {{ request()->is('profil-kota/geografis') ? 'active' : '' }}" href="/profil-kota/geografis">Geografis</a></li>
                        <li><a class="dropdown-item {{ request()->is('profil-kota/demografi') ? 'active' : '' }}" href="/profil-kota/demografi">Demografi</a></li>
                    </ul>
                </li>
		<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('pemerintahan/*') ? 'active' : '' }}"  href="#" id="pemerintahanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background: linear-gradient(to right, red, blue); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 12px;">
                        Pemerintahan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="pemerintahanDropdown">
                        <li><a class="dropdown-item {{ request()->is('pemerintahan.eksekutif') ? 'active' : '' }}" href="{{ route('pemerintahan.eksekutif') }}">Eksekutif</a></li>
                        <li><a class="dropdown-item {{ request()->is('pemerintahan.legislatif') ? 'active' : '' }}" href="{{ route('pemerintahan.legislatif') }}">Legislatif</a></li>
                        <li><a class="dropdown-item {{ request()->is('pemerintahan.perangkat_daerah') ? 'active' : '' }}" href="{{ route('pemerintahan.perangkat_daerah') }}">Perangkat Daerah</a></li>
                        <li><a class="dropdown-item {{ request()->is('pemerintahan.sekretariat daerah') ? 'active' : '' }}" href="{{ route('pemerintahan.sekretariat_daerah') }}">Sekretariat Daerah</a></li>
                        <li><a class="dropdown-item {{ request()->is('pemerintahan.kecamatan') ? 'active' : '' }}" href="{{ route('pemerintahan.kecamatan') }}">Kecamatan</a></li>
                        <li><a class="dropdown-item {{ request()->is('pemerintahan.desa') ? 'active' : '' }}" href="{{ route('pemerintahan.desa') }}">Desa</a></li>
                        <li><a class="dropdown-item {{ request()->is('pemerintahan.kelurahan') ? 'active' : '' }}" href="{{ route('pemerintahan.kelurahan') }}">Kelurahan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('berita.index') ? 'active' : '' }}" href="{{ route('berita.index') }}" style="background: linear-gradient(to right, red, blue); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 12px;">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('transparansi') ? 'active' : '' }}" href="{{ url('/transparansi') }}" style="background: linear-gradient(to right, red, blue); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 12px;">Transparansi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('informasi/*') ? 'active' : '' }}" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background: linear-gradient(to right, red, blue); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 12px;">
                        Informasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                        <li><a class="dropdown-item {{ request()->routeIs('layanan') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('agenda') ? 'active' : '' }}" href="{{ route('agenda') }}">Agenda</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('pengumuman') ? 'active' : '' }}" href="{{ route('pengumuman') }}">Pengumuman</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('infografi') ? 'active' : '' }}" href="{{ route('infografi') }}">Infografis</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('download') ? 'active' : '' }}" href="{{ route('download') }}">Download</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('penghargaan') ? 'active' : '' }}" href="{{ route('penghargaan') }}">Penghargaan</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <form class="d-flex ms-3">
                        <input class="form-control me-2" type="search" placeholder="Cari Informasi..." aria-label="Search" style="font-size: 12px;">
                        <button class="btn btn-light" type="submit" style="color: #a51212; font-weight: bold; font-size: 15px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#a51212" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zm-5.442.656a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z"/>
                            </svg>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
