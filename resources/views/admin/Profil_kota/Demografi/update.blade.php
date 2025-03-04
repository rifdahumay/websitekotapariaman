<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Demografi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit Demografi</h1>
                    <hr />
                    <form action="{{ route('admin/profil_kota/demografi/update', $demografi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{$demografi->title}}">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Jumlah Penduduk</label>
                                <input type="text" name="jumlah_penduduk" class="form-control" placeholder="Jumlah Penduduk" value="{{$demografi->jumlah_penduduk}}">
                                @error('jumlah_penduduk')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Struktur Umur Penduduk</label>
                                <input type="text" name="struktur_umur" class="form-control" placeholder="Struktur Umur" value="{{$demografi->struktur_umur}}">
                                @error('struktur_umur')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Komposisi Etnis</label>
                                <input type="text" name="komposisi_etnis" class="form-control" placeholder="Komposisi Etnis" value="{{$demografi->komposisi_etnis}}">
                                @error('komposisi_etnis')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Sebaran Agama</label>
                                <input type="text" name="sebaran_agama" class="form-control" placeholder="Sebaran Agama" value="{{$demografi->sebaran_agama}}">
                                @error('sebaran_agama')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
