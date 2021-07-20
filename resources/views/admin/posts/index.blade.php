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
                        <td>View | Edit | Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection
