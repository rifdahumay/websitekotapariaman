<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Resmi Kota Pariaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        /* CSS untuk background video */
        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .content {
            position: relative;
            z-index: 1;
            background: linear-gradient(to top, transparent, rgba(255, 215, 0, 0.8)); /* Gradient kuning berada di bawah */
            padding: 60px 0;
            text-align: center;
            color: white;
            font-family: 'Inter', sans-serif;
            display: flex; /* Menambahkan flexbox */
            flex-direction: column; /* Menyusun secara vertikal */
            justify-content: center; /* Menyusun secara vertikal di tengah */
            align-items: center; /* Menyusun secara horizontal di tengah */
            height: 100vh; /* Pastikan konten mengambil tinggi penuh layar */
            overflow: hidden; /* Menghindari scroll */
        }

        .content img {
            width: 70px; /* Menyesuaikan ukuran lebar logo */
            height: auto;
            margin-right: 20px; /* Menambahkan sedikit jarak ke kanan logo */
        }

        .content h1, .content h2 {
            margin: 0; /* Menghapus margin default */
            text-align: left; /* Rata kiri */
        }

        .text-start {
            text-align: left; /* Memastikan teks rata kiri */
        }

        .btn-warning {
          padding: 12px 30px;
          font-size: 18px;
          border-radius: 25px;
          text-transform: uppercase;
          background: linear-gradient(45deg, #ff0000, #FFD700); /* Gradient merah ke kuning */
          color: white;
          border: none;
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
          transition: all 0.3s ease;
      }

      .btn-warning:hover {
          background: linear-gradient(45deg, #FF6347, #FFD700); /* Gradient saat hover */
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
          transform: translateY(-5px); /* Efek gerakan sedikit ke atas saat hover */
      }

        .card-container {
            margin-top: 40px;
        }
        

        /* Ikon box styling */
        .icon-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }
        .icon-box:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
        }
        .icon-box i {
            font-size: 40px;
            color: #FFD700;
        }
        .icon-title {
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .card-container {
                margin-top: 30px;
            }

            .content h1 {
                font-size: 30px;
            }

            .content h2 {
                font-size: 18px;
            }

            .btn-warning {
                font-size: 16px;
                padding: 10px 20px;
            }

            .icon-box {
                padding: 20px;
            }

            .icon-box i {
                font-size: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <!-- Video background -->
        <video class="video-background" autoplay muted loop>
            <source src="/videos/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Content -->
        <div class="content">
            <div class="d-flex align-items-center text-start">
                <img src="/logos/Lambang_Kota_Pariaman.png" alt="Logo Kota Pariaman">
                <div class="text-start">
                    <h1>WEBSITE RESMI PEMERINTAH</h1>
                    <h2>KOTA PARIAMAN</h2>
                </div>
            </div>
            <p><a href="/landing" class="btn btn-warning">SITUS WEB KOTA</a></p>
        </div>


        <!-- Cards -->
        <div class="container card-container">
            <div class="row text-center">
                <!-- Berita Kota -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="icon-box">
                        <i class="bi bi-newspaper"></i>
                    </div>
                    <p class="icon-title">Berita Kota</p>
                </div>

                <!-- Transparansi -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="icon-box">
                        <i class="bi bi-bar-chart"></i>
                    </div>
                    <p class="icon-title">Transparansi</p>
                </div>

                <!-- Profil Kota -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="icon-box">
                        <i class="bi bi-people"></i>
                    </div>
                    <p class="icon-title">Profil Kota</p>
                </div>

                <!-- Pemerintahan -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="icon-box">
                        <i class="bi bi-building"></i>
                    </div>
                    <p class="icon-title">Pemerintahan</p>
                </div>

                <!-- Layanan -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="icon-box">
                        <i class="bi bi-list-check"></i>
                    </div>
                    <p class="icon-title">Layanan</p>
                </div>

                <!-- Agenda Kota -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="icon-box">
                        <i class="bi bi-calendar"></i>
                    </div>
                    <p class="icon-title">Agenda Kota</p>
                </div>

                <!-- Pengumuman -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="icon-box">
                        <i class="bi bi-megaphone"></i>
                    </div>
                    <p class="icon-title">Pengumuman</p>
                </div>

                <!-- Penghargaan -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="icon-box">
                        <i class="bi bi-trophy"></i>
                    </div>
                    <p class="icon-title">Penghargaan</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
