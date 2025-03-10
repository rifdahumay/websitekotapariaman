<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Demografi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Tambah Demografi</h1>
                    <hr />
                    @if (session()->has('error'))
                    <div>
                        {{ session('error') }}
                    </div>
                    @endif

                    <!-- Form -->
                    <p><a href="{{ route('admin/profil_kota/demografi') }}" class="btn btn-primary">Kembali</a></p>

                    <form action="{{ route('admin/profil_kota/demografi/save') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="jumlah_penduduk" class="form-control" placeholder="Jumlah Penduduk" value="{{ old('jumlah_penduduk') }}">
                                @error('jumlah_penduduk')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="struktur_umur" class="form-control" placeholder="Struktur Umur Penduduk" value="{{ old('struktur_umur') }}">
                                @error('struktur_umur')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="komposisi_etnis" class="form-control" placeholder="Komposisi Etnis" value="{{ old('komposisi_etnis') }}">
                                @error('komposisi_etnis')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="sebaran_agama" class="form-control" placeholder="Sebaran Agama" value="{{ old('sebaran_agama') }}">
                                @error('sebaran_agama')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
