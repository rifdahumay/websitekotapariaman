<!-- resources/views/partials/hero.blade.php -->
<header style="position: relative; background: url('/logos/background.png') no-repeat center center/cover; height: 600px; width: 100vw; color: white; overflow: hidden; top: 30px;">
    
    <!-- Konten di tengah -->
    <div class="container-fluid h-100 d-flex flex-column justify-content-center align-items-center position-absolute text-center" style="top: -120px;">
        <!-- Logo Kota Pariaman -->
        <img src="/logos/Lambang_Kota_Pariaman.png" alt="Logo Kota Pariaman" class="animate__animated animate__fadeIn" style="height: 150px; margin-bottom: 20px;">
        
        <!-- Teks Selamat Datang -->
        <h1 class="animate__animated animate__fadeIn" style="font-size: 24px; font-weight: 300; color: black; margin-bottom: 5px;">
            SELAMAT DATANG DI WEBSITE RESMI
        </h1>
        <h1 id="typewriter" class="animate__animated animate__fadeIn animate__delay-1s" style="font-size: 28px; font-weight: 900; color: red;">
            <!-- Efek ketikan akan muncul di sini -->
        </h1>
    </div>
</header>

<!-- Script Typewriter -->
<script src="https://cdn.jsdelivr.net/npm/typewriter-effect@2.18.0/dist/core.js"></script>
<script>
    // Menggunakan TypewriterJS untuk efek ketikan
    var typewriter = new Typewriter('#typewriter', {
        loop: true,
        delay: 75
    });

    typewriter
        .typeString('PEMERINTAH KOTA PARIAMAN') // Teks pertama
        .pauseFor(1500)
        .deleteAll()
        .typeString('SUMATERA BARAT')          // Teks kedua
        .pauseFor(1500)
        .deleteAll()
        .typeString('INFORMATIF')              // Teks ketiga
        .pauseFor(1500)
        .deleteAll()
        .typeString('INOVATIF')                // Teks keempat
        .pauseFor(1500)
        .deleteAll()
        .start();
</script>

<!-- Styling untuk Header -->
<style>
    header {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        text-align: center;
    }

    header img {
        height: 150px;
        transition: transform 0.3s ease;
    }

    header img:hover {
        transform: scale(1.1); /* Efek zoom saat hover pada logo */
    }

    header h1 {
        margin: 0;
    }
</style>
