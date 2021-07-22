@extends('layouts.app')


@section('content')
    <div class="container">

        <h1>Welcome Page</h1>

        {{-- disattivato la sezione registrazione in web.php -> Auth::routes(['register' => false]);
        <p>Registrati subito per inizia a pubblicare <a href="{{ route('register') }}">lo puoi fare qui 😜</a></p>
        <a href="{{ route('posts.index') }}">Accedi senza registrazione 😏</a> --}}

    </div>

@endsection
