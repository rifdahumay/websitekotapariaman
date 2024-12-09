@extends('layouts.app')

@section('content')
<section class="py-5" style="background: linear-gradient(135deg, #c3e8f8, #ffffff, #ffe5b4); min-height: 100vh;">
  <div class="container py-5 px-4" style="max-width: 800px; background: #ffffff; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
    <h1 class="text-center mb-4 gradient-text fw-bold">Kirim Pesan Anda</h1>
    <p class="text-center mb-5 text-muted">Kami selalu siap mendengarkan aspirasi, kritik, dan saran Anda.</p>
    
    <form action="{{ route('pesan.store') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label for="name" class="form-label fw-semibold">Nama <span class="text-danger">*</span></label>
        <div class="input-group shadow-sm">
          <span class="input-group-text bg-primary text-white">
            <i class="fas fa-user"></i>
          </span>
          <input type="text" class="form-control border-2 border-primary" id="name" name="name" placeholder="Masukkan nama Anda" required>
        </div>
      </div>
      <div class="mb-4">
        <label for="email" class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
        <div class="input-group shadow-sm">
          <span class="input-group-text bg-primary text-white">
            <i class="fas fa-envelope"></i>
          </span>
          <input type="email" class="form-control border-2 border-primary" id="email" name="email" placeholder="Masukkan email Anda" required>
        </div>
      </div>
      <div class="mb-4">
        <label for="category" class="form-label fw-semibold">Kategori Pesan <span class="text-danger">*</span></label>
        <select class="form-select shadow-sm border-2 border-primary" id="category" name="category" required>
          <option value="" disabled selected>Pilih kategori</option>
          <option value="aspirasi">Aspirasi</option>
          <option value="kritik">Kritik</option>
          <option value="saran">Saran</option>
          <option value="pengaduan">Pengaduan</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="priority" class="form-label fw-semibold">Tingkat Prioritas <span class="text-danger">*</span></label>
        <select class="form-select shadow-sm border-2 border-primary" id="priority" name="priority" required>
          <option value="" disabled selected>Pilih prioritas</option>
          <option value="rendah">Rendah</option>
          <option value="sedang">Sedang</option>
          <option value="tinggi">Tinggi</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="message" class="form-label fw-semibold">Pesan <span class="text-danger">*</span></label>
        <div class="input-group shadow-sm">
          <span class="input-group-text bg-primary text-white">
            <i class="fas fa-comment-dots"></i>
          </span>
          <textarea class="form-control border-2 border-primary" id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn-gradient btn-lg px-4 py-2 fw-semibold shadow">
          <i class="fas fa-paper-plane me-2"></i><span class="gradient-text">Kirim Pesan</span>
        </button>
      </div>
    </form>
  </div>
</section>

<style>
  .gradient-text {
    background: linear-gradient(90deg, #ff0000, #0000ff); 
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent; 
  }
  .btn-gradient {
    background-color: #ffffff;
    border: 2px solid transparent;
    border-image: linear-gradient(90deg, #ff0000, #0000ff); 
    border-image-slice: 1;
    padding: 0.5rem 1rem;
    transition: 0.3s ease-in-out;
    position: relative;
    overflow: hidden;
  }

  .btn-gradient:hover {
    background: linear-gradient(90deg, #ff0000, #0000ff); 
    color: white;
    border-color: transparent;
  }

  .btn-gradient:active {
    background-color: white;
    color: black;
    border: 2px solid #ccc;
  }
</style>
@endsection
