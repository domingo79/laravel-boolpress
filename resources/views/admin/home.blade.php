@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- saluto l'admin --}}
                        <p>{{ __('You are logged in!' . ' Hello ' . Auth::user()->name) }}</p>
                        <a href="{{ route('admin.posts.index') }}">Vai alla tua dashboard dei posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
