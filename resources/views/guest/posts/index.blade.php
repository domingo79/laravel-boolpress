@extends('layouts.app')

@section('content')
    {{-- jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">ALL NEWS</h1>
            <p class="lead"> Ci sono {{ count($articles) }} posts, ultimo aggiornamento.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card text-left">
                        <img class="card-img-top" src="{{ asset('storage/' . $post->image) }}"
                            alt="{{ $post->title }} ">
                        <div class="card-body">
                            <h4 class="card-title">{{ $post->title }}</h4>
                            <p class="card-text">{{ $post->description }}</p>
                            <a href="{{ route('posts.show', $post->id) }}">continua...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- per la paginazione --}}
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
