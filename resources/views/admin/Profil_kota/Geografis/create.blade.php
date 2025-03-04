<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Geografis') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Tambah Geografis</h1>
                    <hr />
                    @if (session()->has('error'))
                    <div>
                        {{ session('error') }}
                    </div>
                    @endif
                    
                    <!-- Form -->
                    <p><a href="{{ route('admin/profil_kota/geografis') }}" class="btn btn-primary">Kembali</a></p>
 
                    <form action="{{ route('admin/profil_kota/geografis/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Image Field -->
                        <!-- <div class="row mb-3">
                            <div class="col">
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> -->

                        <!-- Location and Boundary -->
                        <div class="row mb-3">
                            <div class="col">
                                <textarea name="location_boundary" class="form-control" placeholder="Lokasi dan Batas Wilayah">{{ old('location_boundary') }}</textarea>
                                @error('location_boundary')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Topography and Climate -->
                        <div class="row mb-3">
                            <div class="col">
                                <textarea name="topography_climate" class="form-control" placeholder="Topografi dan Iklim">{{ old('topography_climate') }}</textarea>
                                @error('topography_climate')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Area and Population -->
                        <div class="row mb-3">
                            <div class="col">
                                <textarea name="area_population" class="form-control" placeholder="Luas Wilayah dan Penduduk">{{ old('area_population') }}</textarea>
                                @error('area_population')
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