@extends('backend.master')
@section('content')
<h2>Specialist Details</h2>
<a class="btn btn-primary" href="{{route('specialist.form')}}">Add new</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>

      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">status</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($list as $key=>$data)
    <tr>
      <th scope="row">{{$key+$list->firstItem()}}</th>

      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->specialist_at}}</td>
      <td>
        <a href="" class="btn btn-primary">view</a>
        <a href="" class="btn btn-primary">Delete</a>
        <a href="" class="btn btn-primary">Edit</a>
      </td>

    </tr>
    @endforeach
  </tbody>
  </table>

{{$list->links()}}



  @endsection