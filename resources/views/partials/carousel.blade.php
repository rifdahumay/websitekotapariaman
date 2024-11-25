<div class="carousel-container">
<div class="custom-border"></div>
    <!-- Title -->
    <h2 class="carousel-title">Informasi Terbaru</h2>
    
    <!-- Carousel -->
    <div id="modernCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <!-- Carousel Items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex align-items-center overflow-scroll">
                    <div class="card mx-2">
                        <img src="/carousel/74ee48b6a01635e893b4645b0fa79173.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Fun for the family</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <div class="card mx-2">
                        <img src="/carousel/5579c7ef7332c2430752844f3f0b036a.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Great for team building</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <div class="card mx-2">
                        <img src="/carousel/c26719641aa370e026235aff9949d9bf.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Explore new cultures</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <div class="card mx-2">
                        <img src="/carousel/74ee48b6a01635e893b4645b0fa79173.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Fun for the family</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <div class="card mx-2">
                        <img src="/carousel/5579c7ef7332c2430752844f3f0b036a.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Great for team building</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <div class="card mx-2">
                        <img src="/carousel/c26719641aa370e026235aff9949d9bf.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Explore new cultures</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <div class="card mx-2">
                        <img src="/carousel/74ee48b6a01635e893b4645b0fa79173.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Fun for the family</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <div class="card mx-2">
                        <img src="/carousel/5579c7ef7332c2430752844f3f0b036a.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Great for team building</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <div class="card mx-2">
                        <img src="/carousel/c26719641aa370e026235aff9949d9bf.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Explore new cultures</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#modernCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#modernCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Styling -->
<style>
    .carousel-container {
        position: relative;
        margin: 30px auto;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .carousel-title {
        margin-top: 20px;
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .carousel-inner {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        gap: 15px;
    }

    .card {
        min-width: 300px;
        max-width: 300px;
        margin: 10px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card img {
        height: 200px;
        object-fit: cover;
        border-radius: 12px 12px 0 0;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.25rem;
        color: #333;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
        margin-bottom: 15px;
    }

    .btn-outline-primary {
        border-radius: 20px;
        font-size: 0.875rem;
        color: #007bff;
        border: 1px solid #007bff;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #fff;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
    }
    .custom-border, .custom-border-bottom {
    position: absolute;
    left: 0;
    width: 100%; /* Lebar border sepanjang layar */
    height: 20px; /* Ketebalan border */
    background: linear-gradient(90deg, #007bff, #ffff00); /* Gradasi biru ke kuning */
    border-radius: 0px; /* Tidak ada lengkungan pada sudut */
}

    /* Border bagian atas */
    .custom-border {
        top: 0;
    }
</style>
