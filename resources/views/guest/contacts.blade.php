@extends('layouts.app')


@section('content')

    <div class="container">

        <h1>Contact me</h1>

        @include('partials.errors')

        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ session('message') }}</strong>
            </div>

            <script>
                $(".alert").alert();
            </script>

        @endif

        <form action="{{ route('contacts') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Mario Rossi"
                    aria-describedby="full_name_helpId" minlength="5" maxlength="75" value="{{ old('full_name') }}"
                    required>
                <small id="full_name_helpId" class="text-muted">Type here your full name</small>
            </div>
            @error('full_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="email">Your Email Address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId"
                    placeholder="exemple@exemple.com" value="{{ old('email') }}" required>
                <small id="emailHelpId" class="form-text text-muted">Help text</small>
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="message"></label>
                <textarea class="form-control" name="message" id="message" rows="5"
                    placeholder="Text...">{{ old('message') }}</textarea>
            </div>
            @error('message')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <button type="submit" class="btn btn-primary btn-block">📧 Send -> </button>
        </form>
    </div>



@endsection
