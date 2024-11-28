
<header style="position: relative; background: url('/logos/background.png') no-repeat center center/cover; height: 600px; width: 100vw; color: white; overflow: hidden; top: 30px;">
    
    <div class="container-fluid h-100 d-flex flex-column justify-content-center align-items-center position-absolute text-center" style="top: -120px;">
        <img src="/logos/Lambang_Kota_Pariaman.png" alt="Logo Kota Pariaman" class="animate__animated animate__fadeIn" style="height: 100px; margin-bottom: 20px;">
        <h1 class="animate__animated animate__fadeIn" style="font-size: 24px; font-weight: 300; color: black; margin-bottom: 5px;">
            SELAMAT DATANG DI WEBSITE RESMI
        </h1>
        <h1 id="typewriter" class="animate__animated animate__fadeIn animate__delay-1s" style="font-size: 28px; font-weight: 900; color: red;">
        </h1>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/typewriter-effect@2.18.0/dist/core.js"></script>
<script>
    var typewriter = new Typewriter('#typewriter', {
        loop: true,
        delay: 75
    });

    typewriter
        .typeString('PEMERINTAH KOTA PARIAMAN') 
        .pauseFor(1500)
        .deleteAll()
        .typeString('SUMATERA BARAT')          
        .pauseFor(1500)
        .deleteAll()
        .typeString('INFORMATIF')              
        .pauseFor(1500)
        .deleteAll()
        .typeString('INOVATIF')                
        .pauseFor(1500)
        .deleteAll()
        .typeString('TERKINI')                
        .pauseFor(1500)
        .deleteAll()
        .typeString('BERMANFAAT')                
        .pauseFor(1500)
        .deleteAll()
        .start();
</script>
