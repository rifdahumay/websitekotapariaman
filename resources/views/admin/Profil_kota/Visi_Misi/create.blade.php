<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Visi & Misi') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Tambah Visi & Misi</h1>
                    <hr />
                    @if (session()->has('error'))
                    <div>
                        {{ session('error') }}
                    </div>
                    @endif
                    
                    <!-- Form -->
                    <p><a href="{{ route('admin/profil_kota/visi_misi') }}" class="btn btn-primary">Kembali</a></p>
 
                    <form action="{{ route('admin/profil_kota/visi_misi/save') }}" method="POST">
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
                                <textarea name="visi" class="form-control" placeholder="Visi">{{ old('visi') }}</textarea>
                                @error('visi')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <textarea name="misi" class="form-control" placeholder="Misi">{{ old('misi') }}</textarea>
                                @error('misi')
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
