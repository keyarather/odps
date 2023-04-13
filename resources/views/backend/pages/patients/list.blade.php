@extends('backend.master')
@section('content')
<h2>Patient Details</h2>
<a class="btn btn-primary" href="{{route('patient.create')}}">Add new</a>
<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patients as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <th>
                    <img width="70px" src="{{url('/uploads/update/category/'.$data->image)}}" alt="NO Image">
                </th>
                <th>{{$data->name}}</th>
                <td>{{$data->department_id}}</td>
                <td>{{$data->mobile}}</td>
                <td>{{$data->email}}</td>
                <td>
                    <a class="btn btn-primary" href="">View</a>
                    <a class="btn btn-success" href="{{route('patient.edit',$data->id)}}">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



@endsection