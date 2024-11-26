<div class="carousel-container position-relative">
    <div class="custom-border"></div>

    <!-- Title -->
    <h2 class="carousel-title">Informasi Terbaru</h2>

    <!-- Carousel -->
    <div id="modernCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <!-- Carousel Items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex align-items-center justify-content-start overflow-auto" style="gap: 20px;">
                    <!-- Card 1 -->
                    <div class="card">
                        <img src="/carousel/74ee48b6a01635e893b4645b0fa79173.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Fun for the family</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="card">
                        <img src="/carousel/5579c7ef7332c2430752844f3f0b036a.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Great for team building</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="card">
                        <img src="/carousel/c26719641aa370e026235aff9949d9bf.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Explore new cultures</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/carousel/74ee48b6a01635e893b4645b0fa79173.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Fun for the family</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="card">
                        <img src="/carousel/5579c7ef7332c2430752844f3f0b036a.jpg" class="card-img-top" alt="New this week">
                        <div class="card-body">
                            <h5 class="card-title">Collection</h5>
                            <p class="card-text">Great for team building</p>
                            <a href="#" class="btn btn-outline-primary">Show all</a>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="card">
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
        background: linear-gradient(to bottom, #f0f8ff, #ffffff);
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .carousel-title {
        margin-top: 20px;
        font-size: 2.5rem;
        font-weight: bold;
        color: #007bff;
        text-align: center;
        margin-bottom: 20px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .carousel-inner {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        gap: 15px;
    }

    .card {
        min-width: 280px;
        max-width: 280px;
        margin: 10px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .card img {
        height: 180px;
        object-fit: cover;
        border-radius: 15px 15px 0 0;
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 8px;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
        margin-bottom: 12px;
    }

    .btn-outline-primary {
        border-radius: 25px;
        font-size: 0.875rem;
        color: #007bff;
        border: 1px solid #007bff;
        transition: all 0.3s ease-in-out;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #fff;
        box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 123, 255, 0.7);
        border-radius: 50%;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: #007bff;
    }

    .custom-border {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 20px;
        background: linear-gradient(90deg, #007bff, #ffff00);
        border-radius: 0;
    }
</style>
