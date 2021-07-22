@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Contact Me!</h1>

        @include('partials.errors')

        <form action="{{ route('admin.contacts.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Name" aria-describedby="helpId" value="{{ old('name') }}" required>
                <small id="nameHelp" class="text-muted">Add your name (min:5 |max: 60)</small>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname"
                    class="form-control @error('lastname') is-invalid @enderror" placeholder="lastname"
                    aria-describedby="helpId" value="{{ old('lastname') }}" required>
                <small id="lastnameHelper" class="text-muted">Add your lastname (min:5 |max: 60)</small>
            </div>
            @error('lastname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="email@exemple.com" aria-describedby="helpId" value="{{ old('email') }}" required>
                <small id="emailHelper" class="text-muted">Add your email </small>
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>
        {{-- <a href="{{ route('admin.posts.index') }}">back</a> --}}


    </div>

@endsection
