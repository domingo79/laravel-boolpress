@extends('layouts.admin')

@section('content')

    <div class="container">

        <span class="d-flex justify-content-end p-3">Add post
            <a href="{{ route('admin.posts.create') }}"><i class="fas fa-plus ml-3 text-success"
                    style="font-size:25px;text-shadow:2px 2px 4px #000000;">
                </i></a>

        </span>


        <div class=" table table-hover">
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

                                <a class="text-success d-block" href="{{ route('admin.posts.show', $post->id) }}">Show</a>
                                <a class="text-primary" href=" {{ route('admin.posts.edit', $post->id) }}">Edit</a>
                                <!-- Button trigger modal -->
                                <a type="button" class="text-danger" data-toggle="modal"
                                    data-target="#post-{{ $post->id }}">
                                    Delete
                                </a>
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
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>

                                                <form action="{{ route('admin.posts.destroy', $post->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
    </div>

@endsection
