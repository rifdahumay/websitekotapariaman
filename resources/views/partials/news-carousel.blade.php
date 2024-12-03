@php
    // Fallback data untuk $news jika belum didefinisikan
    $news = $news ?? [
        [
            'title' => 'Default News Title 1',
            'description' => 'Default news description for slide 1.',
            'date' => '1 Januari 2025',
        ],
        [
            'title' => 'Default News Title 2',
            'description' => 'Default news description for slide 2.',
            'date' => '2 Januari 2025',
        ],
    ];
@endphp

<div id="newsCarousel" class="relative overflow-hidden">
    <div class="relative w-full">
        @foreach ($news as $index => $item)
            <div class="carousel-item {{ $loop->first ? 'block' : 'hidden' }} transition-opacity duration-700">
                <div class="p-6 bg-white shadow-md rounded-md">
                    <h4 class="text-lg font-bold text-blue-600">{{ $item['title'] }}</h4>
                    <p class="mt-2 text-gray-700">{{ $item['description'] }}</p>
                    <span class="block mt-4 text-sm text-gray-500">{{ $item['date'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Controls -->
    <button 
        class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-blue-500 text-white px-3 py-2 rounded-full hover:bg-blue-600" 
        onclick="prevSlide()">
        &lt;
    </button>
    <button 
        class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-blue-500 text-white px-3 py-2 rounded-full hover:bg-blue-600" 
        onclick="nextSlide()">
        &gt;
    </button>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll("#newsCarousel .carousel-item");

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('block', i === index);
            slide.classList.toggle('hidden', i !== index);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    // Optional: Automatically cycle slides
    setInterval(() => {
        nextSlide();
    }, 5000);
</script>
