<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Geografis') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit Geografis</h1>
                    <hr />
                    <form action="{{ route('admin/profil_kota/geografis/update', $geografis->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title Field -->
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title', $geografis->title) }}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Image Field -->
                        <!-- <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                @if($geografis->image)
                                    <img src="{{ asset('storage/' . $geografis->image) }}" alt="Geografis Image" class="mt-2" style="width: 100px; height: auto;">
                                @endif
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> -->

                        <!-- Location and Boundary Field -->
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Lokasi dan Batas Wilayah</label>
                                <textarea name="location_boundary" class="form-control" placeholder="Lokasi dan Batas Wilayah">{{ old('location_boundary', $geografis->location_boundary) }}</textarea>
                                @error('location_boundary')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Topography and Climate Field -->
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Topografi dan Iklim</label>
                                <textarea name="topography_climate" class="form-control" placeholder="Topografi dan Iklim">{{ old('topography_climate', $geografis->topography_climate) }}</textarea>
                                @error('topography_climate')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Area and Population Field -->
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Luas Wilayah dan Penduduk</label>
                                <textarea name="area_population" class="form-control" placeholder="Luas Wilayah dan Penduduk">{{ old('area_population', $geografis->area_population) }}</textarea>
                                @error('area_population')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
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