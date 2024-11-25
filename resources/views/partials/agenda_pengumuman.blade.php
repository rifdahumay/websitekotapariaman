<section id="agenda-pengumuman" class="my-5 custom-bg">
    <div class="custom-border"></div>
    <div class="container">
        <h2 class="text-center mb-4">Agenda dan Pengumuman</h2>
        <div class="row">
            <!-- Pengumuman -->
            <div class="col-md-6">
                <div class="card" style="border: 1px solid #ccc;">
                    <div class="card-header text-white bg-dark">
                        <h5 class="mb-0 text-center"><i class="fas fa-bullhorn"></i> PENGUMUMAN</h5>
                    </div>
                    <div class="card-body p-3">
                        @for ($j = 0; $j < 5; $j++)
                            <div class="d-flex align-items-center mb-3 hover-news" 
                                style="border: 1px solid #ccc; padding: 10px; border-radius: 8px;">
                                <img src="/logos/Cover image.png" alt="Thumbnail" 
                                    style="width: 80px; height: 80px; border: 2px solid #ccc; border-radius: 10px;" 
                                    class="me-3">
                                <div>
                                    <small class="text-muted">18 Jam Lalu</small>
                                    <p class="mb-0">Morbi habitasse felis nulla arcu, morbi ultrices.</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Agenda dengan Efek Glassmorphism -->
            <div class="col-md-6">
                <div class="agenda-container" style="border: 1px solid #ccc; border-radius: 10px; padding: 20px;">
                    <div class="card bg-transparent border-0" style="max-width: 100%; width: 100%;">
                        <div class="card-header text-white bg-dark">
                            <h5 class="mb-0 text-center"><i class="fas fa-calendar-alt"></i> AGENDA</h5>
                        </div>
                        <div class="card-body p-3">
                            <!-- Agenda Item 1 -->
                            <div class="agenda-item p-3 mb-3" style="border-bottom: 2px solid #ccc; padding-bottom: 20px;">
                                <img src="/logos/Cover image.png" alt="Agenda 1" class="img-fluid mb-3" style="border-radius: 8px;">
                                <h6 class="agenda-title">Agenda 1: Rapat Koordinasi</h6>
                                <p class="agenda-details">Tanggal: 27 November 2024 | Waktu: 10:00 WIB</p>
                                <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#agenda1" aria-expanded="false" aria-controls="agenda1">Buka Agenda</button>
                                <div class="collapse mt-3" id="agenda1">
                                    <div class="card card-body">
                                        <p>Deskripsi lengkap agenda 1, topik yang akan dibahas, dan detail lainnya yang diperlukan.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Agenda Item 2 -->
                            <div class="agenda-item p-3 mb-3" style="border-bottom: 2px solid #ccc; padding-bottom: 20px;">
                                <img src="/logos/Cover image.png" alt="Agenda 2" class="img-fluid mb-3" style="border-radius: 8px;">
                                <h6 class="agenda-title">Agenda 2: Workshop Teknologi</h6>
                                <p class="agenda-details">Tanggal: 29 November 2024 | Waktu: 14:00 WIB</p>
                                <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#agenda2" aria-expanded="false" aria-controls="agenda2">Buka Agenda</button>
                                <div class="collapse mt-3" id="agenda2">
                                    <div class="card card-body">
                                        <p>Deskripsi lengkap agenda 2, topik yang akan dibahas, dan detail lainnya yang diperlukan.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Agenda Item 3 -->
                            <div class="agenda-item p-3 mb-3" style="border-bottom: 2px solid #ccc; padding-bottom: 20px;">
                                <img src="/logos/Cover image.png" alt="Agenda 3" class="img-fluid mb-3" style="border-radius: 8px;">
                                <h6 class="agenda-title">Agenda 3: Seminar Pengembangan Karir</h6>
                                <p class="agenda-details">Tanggal: 1 Desember 2024 | Waktu: 09:00 WIB</p>
                                <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#agenda3" aria-expanded="false" aria-controls="agenda3">Buka Agenda</button>
                                <div class="collapse mt-3" id="agenda3">
                                    <div class="card card-body">
                                        <p>Deskripsi lengkap agenda 3, topik yang akan dibahas, dan detail lainnya yang diperlukan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tambahkan Efek Animasi dan Glassmorphism -->
<style>
    /* Efek Hover pada Pengumuman */
    .hover-news:hover {
        background-color: #f0f0f0;
        transform: scale(1.05);
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    /* Animasi pada Agenda */
    .agenda-container {
        min-height: 400px; /* Perpanjang tinggi card */
        width: 100%;  /* Lebarkan container agar card bisa menyesuaikan */
    }
    .agenda-item {
        margin-bottom: 20px; /* Jarak antar agenda */
    }
    .agenda-item button {
        width: 100%; /* Membuat tombol lebar penuh */
    }
    .collapse {
        margin-top: 10px;
    }
    .card {
        max-width: 100%;  /* Lebarkan card agar memenuhi lebar container */
        width: 100%;
    }
    .agenda-item:nth-child(1) {
        animation-delay: 0.2s;
    }

    .agenda-item:nth-child(2) {
        animation-delay: 0.4s;
    }

    .agenda-item:nth-child(3) {
        animation-delay: 0.6s;
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    /* Glassmorphism */
    .agenda-container {
        background: rgba(255, 255, 255, 0.2);  /* Semi-transparent white */
        backdrop-filter: blur(10px);  /* Blur effect */
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: rgba(0, 0, 0, 0.6);  /* Dark header */
    }
</style>
