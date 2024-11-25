<!-- resources/views/partials/features.blade.php -->
<section id="features" class="py-5">
  <div class="container">
    <h2 class="section-header text-center mb-5">Tempat Wisata di Pariaman</h2>
    <div class="row">
      <!-- Tempat Wisata 1 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="/logos/Cover image.png" alt="Pantai Gandoriah" class="card-img-top">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Pantai Gandoriah</h5>
            <p class="card-text">Pantai Gandoriah terkenal dengan keindahan pasir putihnya dan pemandangan matahari terbenam yang memukau.</p>
            <a href="#" class="btn btn-primary mt-auto">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Tempat Wisata 2 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="/logos/Cover image.png" alt="Pulau Angso Duo" class="card-img-top">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Pulau Angso Duo</h5>
            <p class="card-text">Pulau kecil yang menawan dengan air laut yang jernih, sangat cocok untuk snorkeling dan bersantai.</p>
            <a href="#" class="btn btn-primary mt-auto">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Tempat Wisata 3 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="/logos/Cover image.png" alt="Pantai Cermin" class="card-img-top">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Pantai Cermin</h5>
            <p class="card-text">Pantai yang tenang dengan suasana asri, cocok untuk menikmati waktu bersama keluarga.</p>
            <a href="#" class="btn btn-primary mt-auto">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Tempat Wisata 4 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="/logos/Cover image.png" alt="Hutan Mangrove" class="card-img-top">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Hutan Mangrove</h5>
            <p class="card-text">Nikmati keindahan alam dan edukasi lingkungan di Hutan Mangrove Pariaman.</p>
            <a href="#" class="btn btn-primary mt-auto">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Tempat Wisata 5 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="/logos/Cover image.png" alt="Pulau Tangah" class="card-img-top">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Pulau Tangah</h5>
            <p class="card-text">Pulau kecil yang eksotis, menawarkan pengalaman unik dengan pemandangan alam yang luar biasa.</p>
            <a href="#" class="btn btn-primary mt-auto">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Tempat Wisata 6 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="/logos/Cover image.png" alt="Pantai Pariaman" class="card-img-top">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Pantai Pariaman</h5>
            <p class="card-text">Destinasi favorit wisatawan dengan kuliner lokal dan berbagai aktivitas pantai menarik.</p>
            <a href="#" class="btn btn-primary mt-auto">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Styling -->
<style>
  #features .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    border-radius: 8px;
    overflow: hidden;
  }

  #features .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
  }

  #features .card-title {
    font-size: 1.2rem;
    font-weight: bold;
    color: #343a40;
  }

  #features .card-text {
    font-size: 0.95rem;
    color: #6c757d;
  }

  #features .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    font-weight: 500;
    font-size: 0.95rem;
    text-transform: uppercase;
    padding: 0.5rem 1rem;
    transition: background-color 0.3s ease;
  }

  #features .btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
  }

  #features img {
    height: 200px;
    object-fit: cover;
    border-radius: 8px 8px 0 0;
  }
</style>
