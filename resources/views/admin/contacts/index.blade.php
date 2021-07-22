@extends('layouts.admin')
@section('content')


    <div class="container">
        <h1>tabella contatti</h1>

        <div class=" table table-hover">
            <table class="table.stiped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>SURNAME</th>
                        <th>EMAIL</th>
                        <th>ISCRIZIONE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)

                        <tr>
                            <td scope="row">#{{ $contact->id }}</td>

                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->lasname }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->created_at }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



    @endsection
