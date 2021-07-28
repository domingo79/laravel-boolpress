@extends('layouts.admin')

@section('content')

    <div class="container">

        <h1>Create a new post</h1>

        @include('partials.errors')
        {{-- va aggiunto al form  enctype="multipart/form-data --}}
        <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="add title" aria-describedby="helpId" value="{{ old('title') }}" required>
                <small id="titleHelp" class="text-muted">Add your post title (max 100)</small>
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- sostituito con l'inserimeto di img tramite il file storage
                <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror"
                    placeholder="image" aria-describedby="helpId" value="{{ old('image') }}" required>
                <small id="coverHelper" class="text-muted">url for a post image</small>
            </div> --}}
            <div class="form-group">
                <label for="">Add a imgage</label>
                <input type="file" class="form-control-file" name="image" id="image" placeholder="image"
                    aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">add img.(jpeg, png, bmp, gif, svg, or webp)</small>
            </div>

            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" rows="3" placeholder="Text here...(max 650)">{{ old('description') }}</textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="category_id">Categories</label>
                <select class="form-control @error('description') is-invalid @enderror" name="category_id" id="category_id"
                    required>
                    <option selected>Select a category</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control @error('tags') is-invalid @enderror" name="tags[]" id="tags" required>
                    <option value="" disabled>Select a tag</option>

                    @if ($tags)

                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    @endif

                </select>
            </div>
            @error('tags')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>
        <a href="{{ route('admin.posts.index') }}">back</a>
    </div>

@endsection
