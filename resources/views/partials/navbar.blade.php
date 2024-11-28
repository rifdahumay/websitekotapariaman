
<nav class="navbar navbar-expand-lg" style="background: linear-gradient(to right, #a51212, #3b3b3b); color: white; font-family: 'Montserrat', sans-serif;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="/logos/Lambang_Kota_Pariaman.png" alt="Logo Kota Pariaman" style="height: 50px; margin-right: 5px;">
        </a>
        <div class="d-flex flex-column align-items-start">
            <h1 class="m-0" style="font-size: 13px; font-weight: bold;">WEBSITE RESMI PEMERINTAH</h1>
            <span style="font-size: 13px; font-weight: bold;">KOTA PARIAMAN</span>
            <span style="font-size: 12px;">www.pariamankota.go.id</span>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="landing" style="color: white; font-size: 12px;">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 12px;">
                        Profil Kota
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                        <li><a class="dropdown-item" href="{{ url('/profil-kota/visimisi') }}">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="/profil-kota/sejarah">Sejarah</a></li>
                        <li><a class="dropdown-item" href="/profil-kota/lambang">Lambang Kota</a></li>
                        <li><a class="dropdown-item" href="/profil-kota/geografis">Geografis</a></li>
                        <li><a class="dropdown-item" href="/profil-kota/demografi">Demografi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pemerintahanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 12px;">
                        Pemerintahan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="pemerintahanDropdown">
                        <li><a class="dropdown-item" href="#eksekutif">Eksekutif</a></li>
                        <li><a class="dropdown-item" href="#legislatif">Legislatif</a></li>
                        <li><a class="dropdown-item" href="#perangkat">Perangkat Daerah</a></li>
                        <li><a class="dropdown-item" href="#sekre">Sekretariat Daerah</a></li>
                        <li><a class="dropdown-item" href="#kecamatan">Kecamatan</a></li>
                        <li><a class="dropdown-item" href="#desa">Desa</a></li>
                        <li><a class="dropdown-item" href="#kelurahan">Kelurahan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('berita.index') }}" style="color: white; font-size: 12px;">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white; font-size: 12px;">Transparansi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 12px;">
                        Informasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                        <li><a class="dropdown-item" href="#layanan">Layanan</a></li>
                        <li><a class="dropdown-item" href="#agenda">Agenda</a></li>
                        <li><a class="dropdown-item" href="#pengumuman">Pengumuman</a></li>
                        <li><a class="dropdown-item" href="#infografis">Infografis</a></li>
                        <li><a class="dropdown-item" href="#download">Download</a></li>
                        <li><a class="dropdown-item" href="#penghargaan">Penghargaan</a></li>
                        <li><a class="dropdown-item" href="#faq">FAQ</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <form class="d-flex ms-3">
                        <input class="form-control me-2" type="search" placeholder="Cari Informasi..." aria-label="Search" style="font-size: 12px;">
                        <button class="btn btn-light" type="submit" style="color: #a51212; font-weight: bold; font-size: 15px;">Cari</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
