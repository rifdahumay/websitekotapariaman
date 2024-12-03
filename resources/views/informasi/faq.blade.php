@extends('layouts.app')

@section('title', 'FAQ')

@section('content')
<section id="faq" class="container my-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold headline-title">Frequently Asked Questions (FAQ)</h2>
        <p class="text-muted">Berikut adalah beberapa pertanyaan yang sering diajukan. Klik untuk mengetahui lebih lanjut.</p>
    </div>

    <div class="accordion" id="faqAccordion">
        <!-- FAQ 1 -->
        <div class="accordion-item shadow-sm mb-3 border-0">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-question-circle me-3"></i><strong>Apa itu Layanan Publik?</strong>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Layanan publik adalah pelayanan yang diberikan oleh pemerintah atau lembaga publik lainnya kepada masyarakat untuk memenuhi kebutuhan atau hak mereka, seperti layanan administrasi, kesehatan, pendidikan, dan lainnya.
                </div>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item shadow-sm mb-3 border-0">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-question-circle me-3"></i><strong>Bagaimana cara mengakses layanan ini?</strong>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Anda dapat mengakses layanan ini melalui aplikasi resmi pemerintah daerah atau melalui website yang telah disediakan. Untuk beberapa layanan, Anda dapat langsung mengaksesnya secara online tanpa perlu mengunjungi kantor pemerintah.
                </div>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item shadow-sm mb-3 border-0">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="fas fa-question-circle me-3"></i><strong>Apakah layanan ini gratis?</strong>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Ya, layanan publik yang disediakan oleh pemerintah biasanya gratis untuk masyarakat. Beberapa layanan mungkin memerlukan biaya administrasi yang rendah tergantung jenis layanannya.
                </div>
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item shadow-sm mb-3 border-0">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <i class="fas fa-question-circle me-3"></i><strong>Bagaimana jika saya mengalami kesulitan dalam menggunakan layanan?</strong>
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Jika Anda mengalami kesulitan dalam menggunakan layanan, Anda bisa menghubungi customer service atau support yang tersedia di aplikasi atau website. Tim support kami siap membantu untuk memandu Anda melalui setiap langkah.
                </div>
            </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item shadow-sm mb-3 border-0">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <i class="fas fa-question-circle me-3"></i><strong>Apakah saya perlu membuat akun untuk menggunakan layanan?</strong>
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Beberapa layanan memerlukan Anda untuk membuat akun terlebih dahulu, seperti untuk layanan administrasi dan pengajuan dokumen. Namun, beberapa layanan dapat diakses tanpa perlu membuat akun.
                </div>
            </div>
        </div>

        <!-- FAQ 6 -->
        <div class="accordion-item shadow-sm mb-3 border-0">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <i class="fas fa-question-circle me-3"></i><strong>Apakah data saya aman saat menggunakan layanan ini?</strong>
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Ya, data pribadi Anda akan dijaga kerahasiaannya dan dilindungi dengan baik. Kami selalu mengikuti standar keamanan data yang ketat untuk memastikan bahwa informasi Anda aman saat menggunakan layanan ini.
                </div>
            </div>
        </div>

        <!-- FAQ 7 -->
        <div class="accordion-item shadow-sm mb-3 border-0">
            <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <i class="fas fa-question-circle me-3"></i><strong>Bagaimana cara mengajukan pengaduan atau masalah terkait layanan?</strong>
                </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Anda dapat mengajukan pengaduan atau masalah melalui platform pengaduan yang tersedia di aplikasi atau website layanan publik. Kami juga menyediakan saluran komunikasi melalui email atau nomor telepon yang dapat Anda hubungi.
                </div>
            </div>
        </div>

        <!-- FAQ 8 -->
        <div class="accordion-item shadow-sm mb-3 border-0">
            <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <i class="fas fa-question-circle me-3"></i><strong>Apakah layanan ini tersedia di seluruh daerah?</strong>
                </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Layanan ini dapat diakses di sebagian besar wilayah, namun ketersediaan layanan tertentu mungkin berbeda-beda di setiap daerah. Pastikan untuk memeriksa di aplikasi atau website apakah layanan yang Anda butuhkan tersedia di daerah Anda.
                </div>
            </div>
        </div>

        <!-- FAQ 9 -->
        <div class="accordion-item shadow-sm mb-3 border-0">
            <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    <i class="fas fa-question-circle me-3"></i><strong>Bisakah saya mengakses layanan ini melalui ponsel?</strong>
                </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Ya, layanan ini sepenuhnya dapat diakses melalui aplikasi mobile yang tersedia di platform Android dan iOS. Anda bisa mengunduh aplikasi resmi dari Google Play Store atau Apple App Store.
                </div>
            </div>
        </div>

        <!-- FAQ 10 -->
        <div class="accordion-item shadow-sm mb-3 border-0">
            <h2 class="accordion-header" id="headingTen">
                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    <i class="fas fa-question-circle me-3"></i><strong>Bagaimana cara melaporkan kesalahan data atau informasi yang tidak akurat?</strong>
                </button>
            </h2>
            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Jika Anda menemukan kesalahan data atau informasi yang tidak akurat, Anda dapat melaporkannya melalui fitur pengaduan atau menghubungi tim support kami melalui kontak yang tersedia di aplikasi atau website.
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /* Menyesuaikan tampilan accordion agar lebih menarik */
.accordion-button {
    background-color: #f8f9fa;  /* Warna latar belakang tombol accordion */
    color: #495057;  /* Warna teks */
    border-radius: 8px;  /* Sudut membulat pada tombol */
    padding: 16px 20px;
    font-size: 1.1rem;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.accordion-button:hover {
    background-color: #e9ecef;  /* Warna latar belakang saat hover */
    transform: scale(1.02);  /* Efek zoom ringan pada tombol */
}

.accordion-button:not(.collapsed) {
    background-color: #cce5ff;  /* Warna latar belakang saat open */
    color: #004085;  /* Warna teks saat open */
}

.accordion-body {
    font-size: 1rem;
    line-height: 1.6;
    color: #6c757d;  /* Warna teks deskripsi */
    padding: 15px 20px;
    background-color: #f1f3f5;  /* Latar belakang konten body */
}

.accordion-item {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);  /* Memberikan bayangan halus */
}

.accordion-item + .accordion-item {
    margin-top: 15px;  /* Jarak antar item FAQ */
}

.fas {
    font-size: 1.4rem;
    color: #007bff;  /* Warna ikon */
    transition: color 0.3s ease;
}

.accordion-button:hover .fas {
    color: #0056b3;  /* Warna ikon saat hover */
}

</style>

@endsection
