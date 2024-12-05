<section id="agenda-pengumuman" class="my-5 custom-bg" style="background: linear-gradient(to top, #fff8e5, #ffffff, #b3ecff);>
    <div class="custom-border"></div>
    <div class="container">
    <div class="text-center mb-4">
            <h1 class="fw-bold headline-title">Agenda dan Pengumuman</h1>
    </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card" style="border: 1px solid #ccc;">
                    <div class="card-header text-white bg-dark">
                        <h5 class="mb-0 text-center"><i class="fas fa-bullhorn"></i> PENGUMUMAN</h5>
                    </div>
                    <div class="card-body p-3" id="announcementContainer" style="max-height: 1100px; overflow-y: auto;">
                        <div class="announcement-content">
                            @for ($j = 0; $j < 10; $j++)
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
            </div>
            <div class="col-md-6 mb-4">

                <div class="card bg-transparent border-0" style="max-width: 100%; width: 100%;">
                    <div class="card-header text-white bg-dark">
                        <h5 class="mb-0 text-center"><i class="fas fa-calendar-alt"></i> AGENDA</h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="agenda-item p-3 mb-3" style="border-bottom: 2px solid #ccc; padding-bottom: 20px;">
                            <img src="/logos/Cover image.png" alt="Agenda 1" class="img-fluid mb-3" style="border-radius: 8px;">
                            <h6 class="agenda-title">Agenda 1: Rapat Koordinasi</h6>
                            <p class="agenda-details d-flex align-items-center">
                                <i class="bi bi-calendar-event me-2 text-primary"></i> 27 November 2024 
                                <span class="mx-2">|</span> 
                                <i class="bi bi-clock me-2 text-primary"></i> 10:00 WIB
                            </p>
                            <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#agenda1" aria-expanded="false" aria-controls="agenda1">
                                Buka Agenda
                            </button>
                            <div class="collapse mt-3" id="agenda1">
                                <div class="card card-body">
                                    <p>Deskripsi lengkap agenda 1, topik yang akan dibahas, dan detail lainnya yang diperlukan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-item p-3 mb-3" style="border-bottom: 2px solid #ccc; padding-bottom: 20px;">
                            <img src="/logos/Cover image.png" alt="Agenda 2" class="img-fluid mb-3" style="border-radius: 8px;">
                            <h6 class="agenda-title">Agenda 2: Workshop Teknologi</h6>
                            <p class="agenda-details d-flex align-items-center">
                                <i class="bi bi-calendar-event me-2 text-primary"></i> 29 November 2024 
                                <span class="mx-2">|</span> 
                                <i class="bi bi-clock me-2 text-primary"></i> 14:00 WIB
                            </p>
                            <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#agenda2" aria-expanded="false" aria-controls="agenda2">
                                Buka Agenda
                            </button>
                            <div class="collapse mt-3" id="agenda2">
                                <div class="card card-body">
                                    <p>Deskripsi lengkap agenda 2, topik yang akan dibahas, dan detail lainnya yang diperlukan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-item p-3 mb-3" style="border-bottom: 2px solid #ccc; padding-bottom: 20px;">
                            <img src="/logos/Cover image.png" alt="Agenda 3" class="img-fluid mb-3" style="border-radius: 8px;">
                            <h6 class="agenda-title">Agenda 3: Seminar Pengembangan Karir</h6>
                            <p class="agenda-details d-flex align-items-center">
                                <i class="bi bi-calendar-event me-2 text-primary"></i> 1 Desember 2024 
                                <span class="mx-2">|</span> 
                                <i class="bi bi-clock me-2 text-primary"></i> 09:00 WIB
                            </p>
                            <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#agenda3" aria-expanded="false" aria-controls="agenda3">
                                Buka Agenda
                            </button>
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
</section>

<style>
    .hover-news:hover {
        background-color: #f0f0f0;
        transform: scale(1.05);
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .agenda-container {
        min-height: 400px; 
        width: 100%; 
    }

    .agenda-item {
        margin-bottom: 20px; 
    }

    .agenda-item button {
        width: 100%;
    }

    .collapse {
        margin-top: 10px;
    }

    .card {
        max-width: 100%;  
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

    .agenda-container {
        background: rgba(255, 255, 255, 0.2);  
        backdrop-filter: blur(10px);  
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: rgba(0, 0, 0, 0.6);  
    }

    @media (max-width: 768px) {
        .row {
            flex-direction: column;
        }

        .col-md-6 {
            margin-bottom: 20px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const announcementContainer = document.getElementById('announcementContainer');

        function scrollAutomatically() {
            if (announcementContainer.scrollTop + announcementContainer.clientHeight >= announcementContainer.scrollHeight) {
                announcementContainer.scrollTop = 0;  
            } else {
                announcementContainer.scrollTop += 2;  
            }
        }

        setInterval(scrollAutomatically, 70); 
    });
</script>