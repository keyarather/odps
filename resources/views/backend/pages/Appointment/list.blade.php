
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
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
    </thead>
    <tbody>
        @foreach($appo as $key => $data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->status}}</td>
            <td>
                @if($data->status=='approved')
                    Already Approved
                @elseif($data->status=='rejected')
                    Already Rejeced
                @else
                <a class="btn btn-info" href="{{route('approve', $data->id)}}">Approve</a>
                <a class="btn btn-danger" href="{{route('reject', $data->id)}}">Decline</a>
                @endif
                
            <!-- <a class="btn btn-success" href="{{route('appointment.view', $data->id)}}">view</a> -->
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection
