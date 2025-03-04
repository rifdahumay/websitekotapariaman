<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Sejarah') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Tambah Sejarah</h1>
                    <hr />
                    @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    
                    <p><a href="{{ route('admin/profil_kota/sejarah') }}" class="btn btn-primary mb-3">Kembali</a></p>
 
                    <form action="{{ route('admin/profil_kota/sejarah/save') }}" method="POST">
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
                                <textarea name="asal_usul" class="form-control" placeholder="Asal Usul">{{ old('asal_usul') }}</textarea>
                                @error('asal_usul')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <textarea name="perkembangan_sejarah" class="form-control" placeholder="Perkembangan Sejarah">{{ old('perkembangan_sejarah') }}</textarea>
                                @error('perkembangan_sejarah')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <textarea name="kota_pariaman_saat_ini" class="form-control" placeholder="Kota Pariaman Saat Ini">{{ old('kota_pariaman_saat_ini') }}</textarea>
                                @error('kota_pariaman_saat_ini')
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