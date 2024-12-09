@extends('layouts.app')

@section('content')
<section class="py-5" style="background: linear-gradient(to bottom, #fff8e5, #ffffff, #b3ecff);">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold headline-title">Pantai Gandoriah</h2>
      <p class="text-muted">Destinasi Keindahan Alam yang Menawan di Kota Pariaman</p>
    </div>
    <div class="row align-items-center mb-5">
      <div class="col-md-6">
        <img src="/logos/Cover image.png" alt="Pantai Gandoriah" class="img-fluid rounded shadow-lg img-large">
      </div>
      <div class="col-md-6">
        <h3 class="fw-bold mb-3">Tentang Pantai Gandoriah</h3>
        <p>
          Pantai Gandoriah adalah ikon wisata utama Kota Pariaman. Terkenal dengan pasir putih yang lembut, 
          ombak yang tenang, dan pemandangan matahari terbenam yang memukau, tempat ini menjadi pilihan sempurna 
          untuk bersantai bersama keluarga maupun pasangan.
        </p>
        <p>
          Dengan lokasi yang strategis, pantai ini juga sering menjadi tuan rumah berbagai acara budaya dan festival lokal, 
          sehingga pengunjung dapat merasakan kehangatan budaya Pariaman yang autentik.
        </p>
      </div>
    </div>
    <div class="mb-5">
      <h3 class="fw-bold mb-3 text-center">Aktivitas yang Bisa Dilakukan</h3>
      <div class="d-flex justify-content-center flex-wrap gap-5">
        <div class="activity-card text-center">
          <i class="fas fa-sun fa-3x mb-3"></i>
          <h5 class="fw-bold">Menikmati Sunset</h5>
          <p>Menyaksikan matahari terbenam yang memukau dengan suasana romantis.</p>
        </div>
        <div class="activity-card text-center">
          <i class="fas fa-swimmer fa-3x mb-3"></i>
          <h5 class="fw-bold">Bermain Pasir & Berenang</h5>
          <p>Kegiatan yang menyenangkan untuk anak-anak dan keluarga.</p>
        </div>
        <div class="activity-card text-center">
          <i class="fas fa-utensils fa-3x mb-3"></i>
          <h5 class="fw-bold">Kuliner Lokal</h5>
          <p>Menikmati hidangan khas Pariaman seperti lontong dan sala lauak.</p>
        </div>
      </div>
    </div>
    <div class="mb-5">
      <h3 class="fw-bold mb-3 text-center">Lokasi Pantai Gandoriah</h3>
      <div class="d-flex justify-content-center">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7971.72639097522!2d100.06735009999999!3d-0.621359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2b9934e2e5de15%3A0x90f4c3e7ddc2dafe!2sPantai%20Gandoriah!5e0!3m2!1sen!2sid!4v1674858391302!5m2!1sen!2sid" 
          width="100%" 
          height="400" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
      <p class="text-center mt-3">Pantai Gandoriah terletak di pusat Kota Pariaman dan mudah dijangkau dengan berbagai moda transportasi.</p>
    </div>
    <div class="text-center">
      <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
    </div>
  </div>
</section>
@endsection

@push('styles')
<style>
  .activity-card {
    width: 250px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .activity-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
  }

  .activity-card i {
    color: #f39c12;
  }

  .img-large {
    max-width: 100%;
    height: auto;
  }
  .img-fluid {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }
</style>
@endpush
