@extends('backend.master')
@section('content')
<form action="{{route('appointment.store')}}" method="post" >


@csrf
  <div class="form-group">
    <label for="your name">your name</label>
    <input type="text" name="name" class="form-control"
     id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
      <label for="email">email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="email">
    </div>
  <div class="form-group">
    <label for="your phone">your phone</label>
    <input type="tel" name="phone" class="your phone" id="exampleInputPassword1" placeholder="your phone">

  </div>
  <div class="form-group">
    <label for="">Date</label>
    <input type="date" name="date" class="your phone" id="exampleInputPassword1" placeholder="your phone">

  </div>
  
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection