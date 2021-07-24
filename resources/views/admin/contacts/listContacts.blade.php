@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class=" table table-hover">

            <table class="table.stiped">
                <thead>
                    <tr>
                        <th>FULL NAME</th>
                        <th>EMAIL</th>
                        <th>MESSAGE</th>
                        <th>DATE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)

                        <tr>
                            <td scope="row">{{ $contact->full_name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-start">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
@endsection
