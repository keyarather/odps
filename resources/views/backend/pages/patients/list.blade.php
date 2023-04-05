@extends('backend.master')
@section('content')
<h2>Patient Details</h2>
<a class="btn btn-primary" href="{{route('patient.create')}}">Add new</a>
<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">department</th>
                <th scope="col">Mobile_No</th>
                <th scope="col">p_email</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patients as $data)
            <tr>
                <th scope="row">{{$data->name}}</th>
                <td>{{$data->department}}</td>
                 <td>{{$data->mobile_no}}</td>
                 <td>{{$data->p_email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>



@endsection