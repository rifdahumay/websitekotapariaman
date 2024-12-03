@extends('layouts.app')

@section('title', 'Informasi Anggaran - Transparansi')

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
            Anggaran
        </li>
    </ol>
</nav>
    <h1 class="text-center" style="color: #a51212; font-weight: bold;">Informasi Anggaran</h1>
    <p class="text-center mb-4" style="font-size: 18px;">Berikut adalah informasi terkait anggaran pemerintahan.</p>

    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Laporan Anggaran Tahunan
            <a href="/files/laporan-anggaran.pdf" target="_blank" class="btn btn-sm btn-success">Unduh</a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Rencana Anggaran Tahun 2024
            <a href="/files/rencana-anggaran-2024.pdf" target="_blank" class="btn btn-sm btn-success">Unduh</a>
        </li>
    </ul>
</div>
@endsection
