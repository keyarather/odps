@extends('backend.master')
@section('content')
<form action="{{route('appointment.update', $edit->id)}}" method="post" >

@method('PUT')
@csrf
  <div class="form-group">
    <label for="your name">your name</label>
    <input type="text" name="name" value="{{$edit->name}}" class="form-control"
     id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
      <label for="email">email</label>
      <input type="email" name="email" value="{{$edit->email}}" class="form-control" id="email" placeholder="email">
    </div>
  <div class="form-group">
    <label for="your phone">your phone</label>
    <input type="tel" name="phone" value="{{$edit->phone}}" class="form-control" id="exampleInputPassword1" class="form-control"  placeholder="your phone">

  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" name="date" class="form-control" value="{{$edit->date}}" id="exampleInputPassword1" class="form-control" placeholder="your phone">

  </div>
  
 
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection