@extends('layouts.app')

@section('content')
<div class="container mb-5 pb-5">
    <div class="row">

        <div class="col-md-3">
            @include('partials.profil_kota.sidebar')
        </div>

        <div class="col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white shadow-sm p-3 rounded" style="background: linear-gradient(to right, #f9f9f9, #ffffff);">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/landing') }}" class="text-decoration-none text-danger d-flex align-items-center">
                            <i class="fas fa-home me-2"></i> Beranda
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#profilDropdown" class="text-decoration-none text-danger d-flex align-items-center">
                            <i class="fas fa-city me-2"></i> Profil Kota
                        </a>
                    </li>
                    <li class="breadcrumb-item active d-flex align-items-center" aria-current="page">
                        <i class="fas fa-users me-2"></i> Demografi
                    </li>
                </ol>
            </nav>

            <div class="content p-5 bg-white shadow rounded">
                <div class="text-center mb-4">
                    <h1 class="fw-bold gradient-text fw-bold">Demografi Kota Pariaman</h1>
                    <hr class="w-25 mx-auto" style="border: 2px solid #a51212;">
                </div>

                @forelse ($demografi as $item)
                    <div class="population-overview mb-4">
                        <h3 class="text-danger"><i class="fas fa-users"></i> Jumlah Penduduk:</h3>
                        <p class="fs-5 text-muted">{{ $item->jumlah_penduduk }}</p>
                    </div>

                    <div class="age-demographics mb-4">
                        <h3 class="text-danger"><i class="fas fa-child"></i> Struktur Umur Penduduk:</h3>
                        <p class="fs-5 text-muted">{{ $item->struktur_umur }}</p>
                    </div>

                    <div class="ethnic-composition mb-4">
                        <h3 class="text-danger"><i class="fas fa-users"></i> Komposisi Etnis:</h3>
                        <p class="fs-5 text-muted">{{ $item->komposisi_etnis }}</p>
                    </div>

                    <div class="religion-distribution mb-4">
                        <h3 class="text-danger"><i class="fas fa-church"></i> Sebaran Agama:</h3>
                        <p class="fs-5 text-muted">{{ $item->sebaran_agama }}</p>
                    </div>
                @empty
                    <p class="text-muted">Data demografi tidak tersedia.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ageDemographicsCtx = document.getElementById('ageDemographicsChart').getContext('2d');
    var ageDemographicsChart = new Chart(ageDemographicsCtx, {
        type: 'pie', // Pie chart
        data: {
            labels: ['Usia 0-14 Tahun', 'Usia 15-64 Tahun', 'Usia 65 Tahun Ke Atas'],
            datasets: [{
                data: [25, 60, 15], 
                backgroundColor: ['#FF5733', '#33FF57', '#3357FF'], 
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                        }
                    }
                }
            }
        }
    });

    var ethnicCompositionCtx = document.getElementById('ethnicCompositionChart').getContext('2d');
    var ethnicCompositionChart = new Chart(ethnicCompositionCtx, {
        type: 'bar', // Bar chart
        data: {
            labels: ['Minangkabau', 'Batak', 'Jawa', 'Lainnya'],
            datasets: [{
                label: 'Persentase Etnis',
                data: [85, 5, 5, 5],
                backgroundColor: '#FF5733', 
                borderColor: '#fff',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 5
                    }
                }
            }
        }
    });

    var religionDistributionCtx = document.getElementById('religionDistributionChart').getContext('2d');
    var religionDistributionChart = new Chart(religionDistributionCtx, {
        type: 'pie', 
        data: {
            labels: ['Islam', 'Kristen Protestan', 'Hindu', 'Budha'],
            datasets: [{
                data: [95, 3, 1, 1], 
                backgroundColor: ['#FF5733', '#33FF57', '#3357FF', '#FF8C00'],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                        }
                    }
                }
            }
        }
    });
</script>

@endsection
