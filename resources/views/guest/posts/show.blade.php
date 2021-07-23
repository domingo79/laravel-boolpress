@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-left">
                    <img class="card-img-top" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }} ">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text">{{ $post->description }}</p>
                        <p>Creato: {{ $post->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 350px">
            <a class="m-top-5" href="{{ route('posts.index') }}">Back</a>
        </div>

    </div>
@endsection
