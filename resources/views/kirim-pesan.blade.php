@extends('layouts.app')

@section('content')
<section class="py-5" style="background: linear-gradient(135deg, #c3e8f8, #ffffff, #ffe5b4); min-height: 100vh;">
  <div class="container py-5 px-4" style="max-width: 800px; background: #ffffff; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
    <h1 class="text-center mb-4 text-primary fw-bold">Kirim Pesan Anda</h1>
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
        <label for="message" class="form-label fw-semibold">Pesan <span class="text-danger">*</span></label>
        <div class="input-group shadow-sm">
          <span class="input-group-text bg-primary text-white">
            <i class="fas fa-comment-dots"></i>
          </span>
          <textarea class="form-control border-2 border-primary" id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-danger btn-lg px-4 py-2 fw-semibold shadow">
          <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
        </button>
      </div>
    </form>
  </div>
</section>
@endsection
