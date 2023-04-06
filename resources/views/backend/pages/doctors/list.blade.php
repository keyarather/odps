@extends('backend.master')
@section('content')
    <h2>Doctor Information</h2>
    <a class="btn btn-primary" href="{{ route('doctor.create') }}">Add new</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Qualification</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->depertment }}</td>
                    <td>{{ $data->qualification }}</td>
                    <td>
                      
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection