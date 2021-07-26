@extends('layouts.app')

@section('content')
    <section class="posts-category container">
        <h2>Article: {{ $category->name }}</h2>

        @forelse ($category->posts as $post)
            <div class="card">
                <img class="card-img-top" src="{{ asset($post->path) }}" alt="{{ $post->title }} image">
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="card-text">{{ $post->description }}</p>
                </div>
            </div>

        @empty
            <p>Nulla da vedere per il momento</p>
        @endforelse


    </section>

@endsection
