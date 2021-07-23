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


            <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>
        <a href="{{ route('admin.posts.index') }}">back</a>
    </div>

@endsection
