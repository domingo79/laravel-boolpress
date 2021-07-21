@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1 class="card-title">Post: #{{ $post->id }}</h1>
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img width="300" src="{{ $post->image }}" alt="image on the {{ $post->title }}">
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
        <a href="{{ route('admin.posts.index') }}">back</a>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger btn-sm d-block mt-3" data-toggle="modal"
        data-target="#post-{{ $post->id }}">
        Delete
    </button>
    <!-- Modal -->
    <div class="modal fade" id="post-{{ $post->id }}" role="dialog" tabindex="-1"
        aria-labelledby="post-{{ $post->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Post??🤔🤔 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    You are going to remove the post!!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Confirm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
