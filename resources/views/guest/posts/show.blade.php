@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class=" col-md-6">
                <div class="card text-left">
                    <h3 class="card-title">Categorie:
                        @if ($post->category)
                            <a
                                href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category ? $post->category->name : 'Nessuna Categoria' }}</a>

                        @else
                            {{ $post->category ? $post->category->name : 'Nessuna Categoria' }}
                        @endif
                    </h3>
                    <img class="card-img-top" src="{{ asset($post->path) }}" alt="{{ $post->title }} ">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text">{{ $post->description }}</p>
                        <p>Creato: {{ $post->created_at }}</p>

                        <div class="tags">
                            Tags:
                            @forelse ($post->tags as $tag )
                                <span>#{{ $tag->name }} |</span>
                            @empty
                                <span>no Tags</span>
                            @endforelse
                        </div>
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
