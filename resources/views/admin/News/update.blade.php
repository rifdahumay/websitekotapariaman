<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit News</h1>
                    <hr />
                    <form action="{{ route('admin/news/update', $news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title', $news->title) }}">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Category -->
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Category</label>
                                <input type="text" name="category" class="form-control" placeholder="Category" value="{{ old('category', $news->category) }}">
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Description">{{ old('description', $news->description) }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Penulis -->
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Author</label>
                                <input type="text" name="penulis" class="form-control" placeholder="Author" value="{{ old('penulis', $news->penulis) }}">
                                @error('penulis')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Published At -->
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Published At</label>
                                <input type="datetime-local" name="published_at" class="form-control" value="{{ old('published_at', \Carbon\Carbon::parse($news->published_at)->format('Y-m-d\TH:i')) }}">
                                @error('published_at')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Image (optional) -->
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Image (optional)</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
