@extends('frontend.file.master')
@section('content')
<table class="table table-dark">
        <thead>
            <tr>

                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">time_slot</th>
                <th scope="col">status</th>
                <th scope="col">date</th>

            </tr>
        </thead>
        <tbody>

            @foreach($patientprofile as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->Department->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->time_slot}}</td>
                <td>{{$data->status}}</td>
                <td>{{$data->date}}</td>
            </tr>
            @endforeach



        </tbody>
    </table>

@endsection