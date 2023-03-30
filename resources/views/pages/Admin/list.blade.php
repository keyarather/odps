@extends('master')
@section('content')
<h2>Patient Details</h2>
<a class="btn btn-primary" href="{{route('admin.create')}}">Add new</a>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Doctor Name</th>
      <th scope="col">Department</th>
      <th scope="col">contact number</th>
      <th scope="col">Doctor type</th>
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