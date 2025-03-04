<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Sejarah') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit Sejarah</h1>
                    <hr />
                    <form action="{{ route('admin/profil_kota/sejarah/update', $sejarah->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $sejarah->title }}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Asal Usul</label>
                                <textarea name="asal_usul" class="form-control" placeholder="Asal Usul">{{ $sejarah->asal_usul }}</textarea>
                                @error('asal_usul')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Perkembangan Sejarah</label>
                                <textarea name="perkembangan_sejarah" class="form-control" placeholder="Perkembangan Sejarah">{{ $sejarah->perkembangan_sejarah }}</textarea>
                                @error('perkembangan_sejarah')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Kota Pariaman Saat Ini</label>
                                <textarea name="kota_pariaman_saat_ini" class="form-control" placeholder="Kota Pariaman Saat Ini">{{ $sejarah->kota_pariaman_saat_ini }}</textarea>
                                @error('kota_pariaman_saat_ini')
                                <span class="text-danger">{{ $message }}</span>
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