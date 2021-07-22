@extends('layouts.admin')

@section('content')

    <div class="container table table-hover">
        <table class="table.stiped">
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
                        <td scope="row">#{{ $post->id }}</td>
                        <td> <a href="{{ route('admin.posts.show', $post->id) }}"><img width="100"
                                    src="{{ $post->image }}" alt="{{ $post->title }}"></a></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>

                            <a class="text-success d-block" href="{{ route('admin.posts.create') }}">Create</a>
                            <a class="text-primary" href=" {{ route('admin.posts.edit', $post->id) }}">Edit</a>
                            <a class="text-danger" href="{{ route('admin.posts.destroy', $post->id) }}">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection
