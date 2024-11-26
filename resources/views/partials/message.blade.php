<section class="py-5 bg-light" style="background: linear-gradient(135deg, #c3e8f8, #ffffff, #ffe5b4);">
    <div class="container bg-warning p-4 rounded-3 position-relative" style="max-height: 450px; overflow: hidden;">
        <img src="{{ asset('/logos/Lambang_Kota_Pariaman.png') }}" alt="Logo Pariaman" 
             style="width: 70px; position: absolute; top: 0; left: 30px;">

        <div class="row align-items-center h-100">
            <div class="col-md-4 text-start d-flex flex-column justify-content-center">
                <h5 class="text-uppercase text-danger mb-2" >Kontak Kami</h5>
                <h2 class="fw-bold mb-3">Pesan Masyarakat Kota Pariaman</h2>
                <p class="mb-3">Sampaikan gagasan, aspirasi, kritik, dan saran Anda kepada kami. Kami selalu siap mendengarkan!</p>

                <a href="{{ url('/kirim-pesan') }}" class="btn btn-danger btn-lg d-flex align-items-center justify-content-center">
                    <i class="fas fa-envelope me-2"></i> Kirim Pesan
                </a>
            </div>

            <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                <img src="{{ asset('/logos/block.png') }}" alt="Ilustrasi Tengah" 
                     class="img-fluid" style="max-width: 500px; margin-left: 150px;">
            </div>
            <div class="col-md-4 text-end d-flex justify-content-end align-items-center">
                <img src="{{ asset('/logos/rb_744 1.png') }}" alt="Ilustrasi" 
                     class="img-fluid" 
                     style="max-width: 300px; position: relative; right: -20px; top: -10px;">
            </div>
        </div>
    </div>
</section>
