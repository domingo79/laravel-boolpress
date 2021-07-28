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
                <div class="mt-2 mb-3"><img width="100" src="{{ asset($post->path) }}" alt="{{ $post->title }}">
                </div>
                {{-- <div class="mt-2 mb-3"><img width="100" src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->title }}">
                </div> --}}
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

            <div class="form-group">
                <label for="category_id">Categories</label>
                <select class="form-control @error('description') is-invalid @enderror" name="category_id" id="category_id"
                    required>
                    <option selected>Select a category</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id === old('category_id', $post->category_id) ? 'selected' : '' }}>
                            {{ $category->name }}</option>
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
                            @if ($errors->any())
                                <option value="{{ $tag->id }}"
                                    {{ in_array($tag->id, old('tags')) ? 'selected' : '' }}>
                                    {{ $tag->name }}</option>
                            @endif
                            <option value="{{ $tag->id }}" {{ $post->tags->contains($tag) ? 'selected' : '' }}>
                                {{ $tag->name }}</option>
                        @endforeach
                    @endif

                </select>
            </div>
            @error('tags')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>
        <a href="{{ route('admin.posts.show', $post->id) }}">BACK to show 🤔</a>
        <a href="{{ route('admin.posts.index') }}">BACK to post 🥱</a>
    </div>
@endsection
