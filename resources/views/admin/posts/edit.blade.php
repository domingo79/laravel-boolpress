@extends('layouts.admin')

@section('content')

    <div class="container">

        <h1>Edit a new post</h1>

        @include('partials.errors')

        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="add title" aria-describedby="helpId" value="{{ $post->title }}" required>
                <small id="titleHelp" class="text-muted">Add your post title (max 100)</small>
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="image">Image url</label>
                <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror"
                    placeholder="image" aria-describedby="helpId" value="{{ $post->image }}" required>
                <small id="coverHelper" class="text-muted">url for a post image</small>
            </div>
            @error('url')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" rows="3" placeholder="Text here...(max 100)">{{ $post->description }}</textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>
        <a href="{{ route('admin.posts.index') }}">back</a>
    </div>
@endsection
