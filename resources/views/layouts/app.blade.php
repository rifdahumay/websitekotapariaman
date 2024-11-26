<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Pariamankota Landing Page')</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  
  <!-- Google Fonts: Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Animate.css for animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  
  <script src="https://cdn.jsdelivr.net/npm/typewriter-effect@2.18.0/dist/core.js"></script>

  <style>
    /* Custom styles here */
    body {
      font-family: 'Montserrat', sans-serif;
    }
    .navbar {
      font-family: 'Montserrat', sans-serif;
    }
    .nav-link {
      margin-left: 20px;
      text-transform: uppercase;
      font-weight: bold;
    }
    .navbar .navbar-nav .nav-link {
      color: white !important;
    }
    .navbar .navbar-nav .nav-link:hover {
      color: #f8f9fa !important;
    }

    /* For active link underline */
/* For active link underline */
.nav-link.active {
    border-bottom: 3px solid #ffcc00; /* Yellow underline for active links */
}

/* Styling untuk arrow dropdown */
.navbar-nav .nav-item .dropdown-toggle::after {
    content: '\25BC'; /* Adds dropdown arrow */
    font-size: 0.5em;  /* Ukuran lebih kecil untuk arrow */
    padding-left: 5px;
    transition: transform 0.3s ease-in-out; /* Animasi saat dropdown terbuka */
}

/* Ubah posisi arrow dropdown ketika dropdown terbuka */
.nav-item.dropdown.show .dropdown-toggle::after {
    transform: rotate(180deg); /* Rotasi arrow saat dropdown terbuka */
}

/* Styling untuk dropdown di perangkat mobile */
@media (max-width: 991px) {
    .navbar-nav {
        text-align: center;
    }
    
    /* Styling untuk dropdown menu */
    .navbar-nav .dropdown-menu {
        background-color: #3b3b3b; /* Warna latar belakang dropdown */
        border-radius: 5px; /* Membuat sudut dropdown lebih lembut */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Menambahkan shadow agar dropdown lebih jelas */
        width: 100%; /* Memastikan dropdown lebar penuh pada perangkat mobile */
    }

    /* Styling untuk item dropdown di mobile */
    .navbar-nav .dropdown-menu .dropdown-item {
        color: white;
        padding: 10px;
    }

    .navbar-nav .dropdown-menu .dropdown-item:hover {
        background-color: #a51212; /* Warna hover item dropdown */
    }

    /* Navbar toggle button */
    .navbar-toggler {
        border-color: #a51212;
    }

    .navbar-toggler-icon {
        background-color: white;
    }

    /* Custom styling untuk dropdown toggle di mobile */
    .nav-item.dropdown .nav-link {
        display: block;
    }
}

    

    
    header {
      background: url('https://www.pariamankota.com/images/hero-bg.svg') no-repeat center center fixed;
      background-size: cover;
      color: white;
      text-align: center;
      padding: 100px 0;
    }
    .section-header {
      font-size: 36px;
      font-weight: 600;
      color: #333;
      margin-bottom: 30px;
    }
    .headline-news {
    background-color: #fff; /* Background putih untuk berita */
    padding: 40px 0; /* Ruang atas dan bawah lebih besar */
}

.headline-title {
    background: linear-gradient(to right, #990000, #550000); /* Gradasi merah ke hitam */
    color: white;
    padding: 10px 30px;
    border-radius: 5px;
    display: inline-block;
}

.news-item {
    margin-bottom: 30px; /* Jarak antar berita dalam satu slide */
}

.news-item img {
    object-fit: cover;
    width: 100%;
    height: 250px; /* Atur tinggi gambar */
}

.news-content {
    padding: 15px;
}

.news-content .badge {
    font-size: 0.875rem;
}

.news-content h4 {
    font-size: 1.125rem;
}

.news-content p {
    font-size: 1rem;
    line-height: 1.6;
}


    #typewriter {
    position: relative;
    display: inline-block;
    }

    #typewriter:after {
        content: '|';  /* Placeholder */
        position: absolute;
        right: 0;
        animation: blink 1s step-end infinite;
    }

    /* Efek berkedip pada placeholder */
    @keyframes blink {
        50% {
            opacity: 0;
        }
    }

    footer {
      background: #000;
      color: white;
      text-align: center;
      padding: 20px;
    }
    html {
      scroll-behavior: smooth;
    }
    .card img {
    height: 200px;
    object-fit: cover;
    }
    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
    }
    .card-text {
        font-size: 0.9rem;
        color: #6c757d;
    }
    .card {
    width: 90%; /* Mengurangi lebar card */
    max-width: 300px; /* Membatasi ukuran maksimal */
    margin: 0 auto; /* Agar card terpusat */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .card img {
        height: 150px; /* Atur tinggi gambar */
        object-fit: cover; /* Agar gambar proporsional */
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .card:hover img {
        transform: scale(1.05);
        filter: brightness(0.9);
    }

    .card-body {
        transition: background-color 0.3s ease;
    }

    .card:hover .card-body {
        background-color: #f8f9fa;
    }


    .carousel-inner img {
    border-radius: 20px;
    filter: brightness(0.8);
    transition: filter 0.5s ease-in-out;
    }

    .carousel-inner img:hover {
        filter: brightness(1);
    }

    .carousel-caption {
        background: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 10px;
        animation: fadeIn 1s ease-in-out;
    }

    .carousel-thumbnails button {
        margin: 0 5px;
        border: none;
        transition: transform 0.3s ease;
    }

    .carousel-thumbnails button img {
        border: 2px solid transparent;
        width: 80px;
        height: auto;
    }

    .carousel-thumbnails button.active img,
    .carousel-thumbnails button:hover img {
        border: 2px solid #007bff;
        transform: scale(1.1);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(1);
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    @media (max-width: 768px) {
    .carousel-caption {
        font-size: 14px;
        padding: 10px;
    }

    .carousel-thumbnails button img {
        width: 60px;
    }
}
.carousel-image {
    height: 100vh;
    object-fit: cover;
    filter: brightness(70%);
    transition: transform 0.8s ease-in-out, filter 0.8s ease-in-out;
}

.carousel-item.active .carousel-image {
    transform: scale(1.05);
    filter: brightness(100%);
    transition: transform 0.8s ease-in-out, filter 0.8s ease-in-out;
}

.carousel-caption {
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
}

.overlay {
    position: relative;
}

.overlay::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8));
    z-index: 1;
}

.carousel-caption {
    position: absolute;
    z-index: 2;
    bottom: 10%;
    left: 5%;
    right: 5%;
}

.carousel-caption h2 {
    animation: fadeInUp 1s ease-in-out;
}

.carousel-caption p {
    animation: fadeInUp 1.5s ease-in-out;
}

.carousel-caption .btn {
    animation: fadeInUp 2s ease-in-out;
}

/* Animasi */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Indicators Customization */
.carousel-indicators button {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.7);
}

.carousel-indicators .active {
    background-color: rgba(255, 255, 255, 1);
    width: 16px;
    height: 16px;
    transition: all 0.3s ease;
}

.carousel-indicators button:hover {
    background-color: rgba(255, 255, 255, 0.9);
    transform: scale(1.1);
}

/* Add hover effects to buttons */
.carousel-control-prev:hover,
.carousel-control-next:hover {
    opacity: 0.8;
}

.hover-news {
    transition: all 0.3s ease-in-out;
    padding: 10px;
    border-radius: 8px;
    position: relative;
    cursor: pointer;
}

.hover-news:hover {
    background-color: #f8f9fa;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}

.hover-news img {
    transition: transform 0.3s ease-in-out;
}

.hover-news:hover img {
    transform: scale(1.2);
}

.hover-news small {
    transition: color 0.3s ease-in-out;
}

.hover-news:hover small {
    color: #007bff;
}

.hover-news p {
    font-weight: bold;
    transition: color 0.3s ease-in-out;
}

.hover-news:hover p {
    color: #333;
}
.custom-bg {
    background: radial-gradient(circle, #d0f4f9, #f9faff, #fffceb, #fde7c5);
    height: 100vh; /* Sesuaikan tinggi dengan kebutuhan */
    padding: 50px 0; /* Padding opsional */
}

/* Background dengan gradasi */
.custom-bg {
    background: radial-gradient(circle, #d0f4f9, #f9faff, #fffceb, #fde7c5);
    height: auto; /* Menyesuaikan konten */
    padding: 50px 0; /* Memberikan ruang vertikal */
    position: relative; /* Dibutuhkan untuk menempatkan border */
}

/* Border gradasi di bagian atas */
.custom-border, .custom-border-bottom {
    position: absolute;
    left: 0;
    width: 100%; /* Lebar border sepanjang layar */
    height: 10px; /* Ketebalan border */
    background: linear-gradient(90deg, #007bff, #ffff00); /* Gradasi biru ke kuning */
    border-radius: 0px; /* Tidak ada lengkungan pada sudut */
}

/* Border bagian atas */
.custom-border {
    top: 0;
}

/* Border bagian bawah */
.custom-border-bottom {
    bottom: 0;
}

/* Judul dengan gradasi teks */
#agenda-pengumuman h2 {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 40px;
    background: linear-gradient(70deg, red, black); /* Gradasi hitam dan merah */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
    text-align: center;
}

/* Hover animasi untuk berita */
.hover-news {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-news:hover {
    transform: translateY(-10px); /* Naik sedikit */
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Efek bayangan */
}

.card-header {
    color: #fff;
}

.card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.card-body p,
.card-body small {
    color: #333;
}
.bg-warning {
  background-color: #fdfd96 !important; /* Warna kuning lembut */
  position: relative;
  overflow: visible; /* Agar gambar bisa keluar */
}

.container.bg-warning img {
  transition: transform 0.3s ease-in-out;
}

.container.bg-warning img:hover {
  transform: scale(1.05); /* Efek hover jika ingin */
}


.btn-danger {
  transition: all 0.3s ease-in-out;
}

.btn-danger:hover {
  background-color: #d63c3c;
  transform: scale(1.05);
}

img {
  max-width: 100%;
  height: auto;
}

.icon-container {
    display: inline-block;
    padding: 10px;
    background: #f8f9fa;
    border-radius: 50%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.vertical-line {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    width: 2px;
    background-color: #ddd;
    margin: auto;
}

.vertical-line:last-child {
    display: none;
}

h5 {
    margin-bottom: 15px;
}

.custom-modal-animation .modal-dialog {
    transform: translateY(-100px);
    opacity: 0;
    transition: transform 0.5s ease, opacity 0.5s ease;
}

.custom-modal-animation.show .modal-dialog {
    transform: translateY(0);
    opacity: 1;
}







  </style>
</head>
<body>

  <!-- Navbar -->
  @include('partials.navbar')

  <!-- Main Content -->
  @yield('content')

  <!-- Footer -->
  @include('partials.footer')

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    const modernCarousel = document.getElementById('modernCarousel');

    // Automatically add active class to the current page link
  $(document).ready(function () {
      var path = window.location.pathname;
      $('.navbar-nav .nav-item a').each(function () {
          if ($(this).attr('href') === path) {
              $(this).addClass('active');
          }
      });
  });


  </script>
</body>
</html>
