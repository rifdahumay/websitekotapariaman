@extends('layouts.app')

@section('title', 'Data Statistik - Transparansi')

@section('content')

<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-3 rounded">
            <li class="breadcrumb-item">
                <a href="{{ route('landing') }}" style="color: #a51212; text-decoration: none;">
                    <i class="bi bi-house-door"></i> Beranda
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('/transparansi') }}" style="color: #a51212; text-decoration: none;">
                    Transparansi
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d;">
                Data Statistik
            </li>
        </ol>
    </nav>
    <h1 class="text-center" style="color: #a51212; font-weight: bold;">Data Statistik</h1>
    <p class="text-center mb-4" style="font-size: 18px;">Berikut adalah informasi statistik penting terkait pembangunan, anggaran, dan pemerintahan Kota Pariaman.</p>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title" style="color: #a51212;">Statistik Anggaran</h5>
                    <canvas id="anggaranChart" width="400" height="300"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title" style="color: #a51212;">Statistik Penduduk</h5>
                    <canvas id="pendudukChart" width="400" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <h2 class="text-center" style="color: #a51212;">Tabel Data Statistik</h2>
            <p class="text-center">Berikut adalah data statistik penting lainnya.</p>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Keterangan</th>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Penduduk</td>
                            <td>Jumlah Penduduk</td>
                            <td>2024</td>
                            <td>150,000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Anggaran</td>
                            <td>Anggaran Tahunan</td>
                            <td>2024</td>
                            <td>Rp 50 Miliar</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pembangunan</td>
                            <td>Proyek yang Selesai</td>
                            <td>2023</td>
                            <td>20 Proyek</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const anggaranCtx = document.getElementById('anggaranChart').getContext('2d');
    const anggaranChart = new Chart(anggaranCtx, {
        type: 'bar',
        data: {
            labels: ['2020', '2021', '2022', '2023', '2024'],
            datasets: [{
                label: 'Anggaran Tahunan (dalam Miliar)',
                data: [45, 48, 50, 55, 60],
                backgroundColor: 'rgba(165, 18, 18, 0.8)',
                borderColor: 'rgba(165, 18, 18, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true
                }
            }
        }
    });

    const pendudukCtx = document.getElementById('pendudukChart').getContext('2d');
    const pendudukChart = new Chart(pendudukCtx, {
        type: 'line',
        data: {
            labels: ['2020', '2021', '2022', '2023', '2024'],
            datasets: [{
                label: 'Jumlah Penduduk (ribuan)',
                data: [140, 145, 148, 150, 152],
                backgroundColor: 'rgba(59, 59, 59, 0.4)',
                borderColor: 'rgba(59, 59, 59, 1)',
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true
                }
            }
        }
    });
</script>
@endsection
