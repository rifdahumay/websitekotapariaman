<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Demografi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">List Demografi</h1>
                        <a href="{{ route('admin/profil_kota/demografi/create') }}" class="btn btn-primary">Tambah Demografi</a>
                    </div>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Jumlah Penduduk</th>
                                <th>Struktur Umur Penduduk</th>
                                <th>Komposisi Etnis</th>
                                <th>Sebaran Agama</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse ($demografi as $item)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $item->title }}</td>
                                <td class="align-middle">{{ $item->jumlah_penduduk }}</td>
                                <td class="align-middle">{{ $item->struktur_umur }}</td>
                                <td class="align-middle">{{ $item->komposisi_etnis }}</td>
                                <td class="align-middle">{{ $item->sebaran_agama }}</td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('admin/profil_kota/demografi/edit', ['id' => $item->id]) }}" type="button" class="btn btn-secondary">Edit</a>
                                        <a href="{{ route('admin/profil_kota/demografi/delete', ['id' => $item->id]) }}" type="button" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="7">Demografi not found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
