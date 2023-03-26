@extends('master')
@section('content')
<a class="btn btn-primary" href="{{route('patient.create')}}">Create patient</a>
<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Sl</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>



@endsection