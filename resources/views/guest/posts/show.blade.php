@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class=" col-md-6">
                <div class="card text-left">
                    <h3 class="card-title">Categorie: {{ $post->category ? $post->category->name : 'Nessuna Categoria' }}
                    </h3>
                    <img class="card-img-top" src="{{ asset($post->path) }}" alt="{{ $post->title }} ">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text">{{ $post->description }}</p>
                        <p>Creato: {{ $post->created_at }}</p>
                    </div>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item">
                            <a class="m-top-5" href="{{ route('posts.index') }}">Back</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
