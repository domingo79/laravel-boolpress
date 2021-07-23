@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1 class="card-title">Post: #{{ $post->id }}</h1>
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="img-fluid " src="{{ asset('storage/' . $post->image) }}"
                        alt="image on the {{ $post->title }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <ul>
                            <li>Create: {{ $post->created_at }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.posts.index') }}">BACK</a>
        <a href="{{ route('admin.posts.edit', $post->id) }}">EDIT</a>

    </div>

@endsection
