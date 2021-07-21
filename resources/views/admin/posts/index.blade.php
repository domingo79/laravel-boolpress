@extends('layouts.admin')

@section('content')

    <div class="container table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IMAGE</th>
                    <th>TITLE</th>
                    <th>CONTENT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)

                    <tr>
                        <td scope="row">{{ $post->id }}</td>
                        <td><img width="100" src="{{ $post->image }}" alt="{{ $post->title }}"></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <a class="text-success" href="{{ route('admin.posts.create') }}">Create</a>
                            <a class="text-warning" href="">Edit</a>
                            <a class="text-danger" href="">Delete</a>
                        </td>
                        {{-- {{ route('admin.posts.edit', $comic->id) }}
{{ route('admin.posts.show', $comic->id) }} --}}
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection
