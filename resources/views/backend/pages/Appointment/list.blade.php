
@extends('backend.master')
@section('content')
<h2>Appointment</h2>
<a class="btn btn-primary" href="{{route('appointment.create')}}">Add new</a>
<table class="table">
    <thead>
    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date</th>
                    <th scope="col">Appointment_id</th>
                </tr>
    </thead>
    <tbody>
        @foreach($appo as $key => $data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->appointment_id}}</td>
            <td>
                <a href="" class="{{route('appointment.delete', $data->id)}}">view</a>
                <a href="" class="{{route('appointment.delete', $data->id)}}">Delete</a>
                <a href="" class="{{route('appointment.delete', $data->id)}}">Edit</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection