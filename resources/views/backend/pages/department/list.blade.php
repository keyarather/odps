@extends('backend.master')
@section('content')
<h2>Depatment Information</h2>
<a class="btn btn-primary" href="{{route('department.form')}}">Add new</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($departments as $key=>$data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->status}}</td>
            <td>
                <a class="btn btn-primary" href="">View</a>
                <a class="btn btn-success" href="{{route('department.edit', $data->id)}}">Edit</a>
                <!-- <a class="btn btn-danger" href="{{route('department.delete', $data->id)}}">Delete</a> -->
            </td>  
        </tr>
    @endforeach
    </tbody>
</table>
@endsection