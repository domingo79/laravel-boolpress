@extends('layouts.admin')

@section('content')

    <div class="container">

        <h1>Edit a new post</h1>

        @include('partials.errors')
        {{-- add enctype --}}
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="add title" aria-describedby="helpId" value="{{ $post->title }}" required>
                <small id="titleHelp" class="text-muted">Add your post title (min:5 max: 100)</small>
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- parte da modificare 
                <div class="form-group">
                <label for="image">Image url</label>
                <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror"
                    placeholder="image" aria-describedby="helpId" value="{{ $post->image }}" required>
                <small id="coverHelper" class="text-muted">url for a post image</small>
            </div> --}}
            <div class="form-group">
                <label for="image">Replace Image</label>
                {{-- aggiungo la vecchia immagine --}}
                <div class="mt-2 mb-3"><img width="100" src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->title }}">
                </div>
                <input type="file" class="form-control-file" name="image" id="image" placeholder="image replace"
                    aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Add a new image img.(jpeg, png, bmp, gif, svg, or
                    webp)</small>
            </div>

            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" rows="3" placeholder="Text here...(max 650)">{{ $post->description }}</textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>
        <a href="{{ route('admin.posts.show', $post->id) }}">BACK to show 🤔</a>
        <a href="{{ route('admin.posts.index') }}">BACK to post 🥱</a>
    </div>
@endsection
