<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin News') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">List Berita</h1>
                        <a href="{{ route('admin/news/create') }}" class="btn btn-primary">Tambah Berita</a>
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
                                <th>Category</th>
                                <th>Penulis</th>
                                <th>Published At</th>
                                <th>Description</th> 
                                <th>Image</th> 
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($news as $item)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $item->title }}</td>
                                <td class="align-middle">{{ $item->category }}</td>
                                <td class="align-middle">{{ $item->penulis }}</td>
                                <td class="align-middle">{{ \Carbon\Carbon::parse($item->published_at)->format('d-m-Y') }}</td>
                                <td class="align-middle">{{ \Str::limit($item->description, 50) }}</td> 
                                <td class="align-middle">
                                    <img src="{{ asset('storage/'.$item->image) }}" alt="Image" width="100" height="auto"> 
                                </td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('admin/news/edit', ['id' => $item->id]) }}" type="button" class="btn btn-secondary">Edit</a>
                                        <a href="{{ route('admin/news/delete', ['id' => $item->id]) }}" type="button" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="8">News not found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>