@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1 class="card-title">Post: #{{ $post->id }}</h1>
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img class="img-fluid " src="{{ asset($post->path) }}" alt="image on the {{ $post->title }}">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <ul>
                            <li>Create: {{ $post->created_at }}</li>
                            {{-- da modificare con un link --}}
                            <li>Category: {{ $post->category ? $post->category->name : 'Nessuna Categoria' }}</li>
                        </ul>
                        <div class="tags">
                            Tags:
                            @forelse ($post->tags as $tag )
                                <span>#{{ $tag->name }} |</span>
                            @empty
                                <span>no Tags</span>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.posts.index') }}">BACK</a>
        <a href="{{ route('admin.posts.edit', $post->id) }}">EDIT</a>

    </div>

@endsection
