@extends('layouts.app')

@section('content')
<!-- Header Section -->
<section class="header-section text-white text-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://www.ayokepariaman.id/wp-content/uploads/2019/12/pantai-gandoriah-1.jpg') no-repeat center center/cover; height: 400px;">
  <div class="container d-flex flex-column justify-content-center align-items-center h-100">
    <h1 class="fw-bold">Pantai Gandoriah</h1>
    <p class="text-white-50">Destinasi Keindahan Alam yang Menawan di Kota Pariaman</p>
  </div>
</section>

<!-- Section: Services -->
<section class="py-5" style="background: linear-gradient(120deg, rgba(0, 123, 255, 0.5), rgba(255, 193, 7, 0.5)); backdrop-filter: blur(8px);">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Apa yang Kami Tawarkan</h2>
      <p class="text-muted">Eksplorasi Pantai Gandoriah dengan berbagai pengalaman seru</p>
    </div>
    <div class="row">
      <!-- Tentang -->
      <div class="col-md-6 mb-4">
        <div class="p-4 border rounded shadow-sm bg-white">
          <img src="https://www.ayokepariaman.id/wp-content/uploads/2019/12/pantai-gandoriah-1.jpg" alt="Pantai Gandoriah" class="img-fluid rounded mb-3">
          <h5 class="fw-bold">Tentang Pantai Gandoriah</h5>
          <p>Pantai Gandoriah adalah ikon wisata utama Kota Pariaman. Terkenal dengan pasir putih yang lembut, ombak yang tenang, dan pemandangan matahari terbenam yang memukau. Selain itu, pantai ini memiliki banyak fasilitas untuk wisatawan, seperti gazebo, restoran, dan penyewaan peralatan bermain air.</p>
        </div>
      </div>
      <!-- Aktivitas -->
      <div class="col-md-6 mb-4">
        <div class="p-4 border rounded shadow-sm bg-white">
          <h5 class="fw-bold">Aktivitas yang Bisa Dilakukan</h5>
          <ul class="list-unstyled">
            <li class="mb-3">
              <i class="fas fa-sun text-warning me-2"></i>
              Menikmati Sunset
            </li>
            <li class="mb-3">
              <i class="fas fa-swimmer text-primary me-2"></i>
              Bermain Pasir & Berenang
            </li>
            <li class="mb-3">
              <i class="fas fa-utensils text-danger me-2"></i>
              Menikmati Kuliner Lokal
            </li>
            <li>
              <i class="fas fa-ship text-info me-2"></i>
              Perjalanan ke Pulau Terdekat
            </li>
          </ul>
        </div>
      </div>
      <!-- Keunikan -->
      <div class="col-md-6 mb-4">
        <div class="p-4 border rounded shadow-sm bg-white">
          <h5 class="fw-bold">Keunikan Pantai Gandoriah</h5>
          <p>Pantai ini memiliki kereta api wisata yang langsung menuju stasiun dekat pantai, satu-satunya di Sumatera Barat. Kereta ini memberikan pengalaman unik kepada wisatawan sambil menikmati pemandangan sepanjang perjalanan. Selain itu, ada juga tradisi lokal "Tabuik" yang rutin diselenggarakan di pantai ini.</p>
        </div>
      </div>
      <!-- Fasilitas -->
      <div class="col-md-6 mb-4">
        <div class="p-4 border rounded shadow-sm bg-white">
          <h5 class="fw-bold">Fasilitas</h5>
          <ul class="list-unstyled">
            <li class="mb-3">
              <i class="fas fa-umbrella-beach text-warning me-2"></i>
              Gazebo untuk Bersantai
            </li>
            <li class="mb-3">
              <i class="fas fa-shower text-primary me-2"></i>
              Kamar Mandi dan Ruang Ganti
            </li>
            <li class="mb-3">
              <i class="fas fa-store text-danger me-2"></i>
              Toko Souvenir
            </li>
            <li>
              <i class="fas fa-parking text-info me-2"></i>
              Area Parkir Luas
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Lokasi Pantai Gandoriah -->
<section class="py-5" style="background: #f9f9f9;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Lokasi Pantai Gandoriah</h2>
      <p class="text-muted">Cari tahu bagaimana cara mencapai Pantai Gandoriah dengan mudah</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="p-4 border rounded shadow-sm bg-white">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7971.72639097522!2d100.06735009999999!3d-0.621359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2b9934e2e5de15%3A0x90f4c3e7ddc2dafe!2sPantai%20Gandoriah!5e0!3m2!1sen!2sid!4v1674858391302!5m2!1sen!2sid" 
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
          </iframe>
          <p class="text-center mt-3">Pantai Gandoriah terletak di pusat Kota Pariaman, Sumatera Barat. Mudah diakses dengan kendaraan umum maupun pribadi.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Testimonial Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center">
      <h2 class="fw-bold">Apa Kata Pengunjung</h2>
      <p class="text-muted">Kami selalu berusaha memberikan pengalaman terbaik</p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <blockquote class="blockquote text-center bg-white p-4 rounded shadow-sm">
          <p class="mb-4">"Pantai ini sangat bersih dan nyaman untuk keluarga. Saya senang sekali melihat anak-anak bermain pasir dengan aman."</p>
          <footer class="blockquote-footer">Nina, <cite title="Source Title">Jakarta</cite></footer>
        </blockquote>
      </div>
      <div class="col-md-4">
        <blockquote class="blockquote text-center bg-white p-4 rounded shadow-sm">
          <p class="mb-4">"Perjalanan kereta api menuju pantai ini adalah pengalaman tak terlupakan. Pemandangan sepanjang jalan begitu menakjubkan!"</p>
          <footer class="blockquote-footer">Andi, <cite title="Source Title">Medan</cite></footer>
        </blockquote>
      </div>
      <div class="col-md-4">
        <blockquote class="blockquote text-center bg-white p-4 rounded shadow-sm">
          <p class="mb-4">"Makanannya enak dan harga cukup terjangkau. Sangat cocok untuk wisatawan yang ingin menikmati kuliner lokal."</p>
          <footer class="blockquote-footer">Maria, <cite title="Source Title">Yogyakarta</cite></footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>
@endsection

@push('styles')
<style>
  .header-section h1 {
    font-size: 3rem;
  }
  .border {
    border: 1px solid #ddd;
  }
  .rounded {
    border-radius: 10px;
  }
  .shadow-sm {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  section[style*="background"] {
    position: relative;
    background: white; /* Warna dasar putih */
    overflow: hidden; /* Untuk menyembunyikan elemen blur yang keluar */
  }

  /* Efek blur lingkaran di pojok */
  section[style*="background"]::before {
    content: '';
    position: absolute;
    top: -100px; /* Posisi lingkaran biru */
    left: -100px;
    width: 300px;
    height: 300px;
    background: rgba(0, 123, 255, 0.5); /* Warna biru */
    filter: blur(100px); /* Efek blur */
    z-index: 1;
  }

  section[style*="background"]::after {
    content: '';
    position: absolute;
    bottom: -100px; /* Posisi lingkaran kuning */
    right: -100px;
    width: 300px;
    height: 300px;
    background: rgba(255, 193, 7, 0.5); /* Warna kuning */
    filter: blur(100px); /* Efek blur */
    z-index: 1;
  }

  /* Memberikan elemen konten prioritas di atas lingkaran blur */
  section[style*="background"] > .container {
    position: relative;
    z-index: 2;
  }
</style>
@endpush
