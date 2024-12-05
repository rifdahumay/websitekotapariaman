<header style="position: relative; background: url('/logos/background.png') no-repeat center center/cover; height: 600px; width: 100vw; color: white; overflow: hidden; top: 30px;">
    <div class="container-fluid h-100 d-flex flex-column justify-content-center align-items-center position-absolute text-center" style="top: -120px;">
        <img src="/logos/Lambang_Kota_Pariaman.png" alt="Logo Kota Pariaman" class="animate__animated animate__fadeIn" style="height: 100px; margin-bottom: 20px;">
        <h1 class="animate__animated animate__fadeIn" style="font-size: 30px; font-weight: 700; color: #2e2e2e; margin-bottom: 5px;">
            Selamat Datang di Website Resmi
        </h1>
        <h1 id="typewriter" class="animate__animated animate__fadeIn animate__delay-1s" style="font-size: 35px; font-weight: 800;">
        </h1>
    </div>
</header>

<style>
    #typewriter {
        background: linear-gradient(90deg, #e02500, #475aff); 
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent; 
    }
</style>

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
