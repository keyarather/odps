@extends('master')
@section('content')

  
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input value="{{$doctor->name}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  
  


@endsection