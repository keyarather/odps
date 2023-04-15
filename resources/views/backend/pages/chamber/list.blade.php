@extends('backend.master')
@section('content')
<h2>Chamber</h2>
<a class="btn btn-primary" href="{{route('chamber.form')}}">Add new</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">location</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($chember as $data)
        <tr>
            <th scope="row">1</th>
            <td>{{$data->name}}</td>
            <td>{{$data->address}}</td>
            <td>Dhaka</td>
            <td>
                <a href="" class="btn btn-primary">view</a>
                <a href="" class="btn btn-primary">Delete</a>
                <a href="" class="btn btn-primary">Edit</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection