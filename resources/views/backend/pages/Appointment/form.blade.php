@extends('backend.master')
@section('content')
<form action="{{route('appointment.store')}}" method="post" >


@csrf
  <div class="form-group">
    <label for="your name">your name</label>
    <input type="text" required name="name" class="form-control"
     id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
      <label for="email">email</label>
      <input type="email" required name="email" class="form-control" id="email" placeholder="email">
    </div>
  <div class="form-group">
    <label for="your phone">your phone</label>
    <input type="tel" required name="phone" class="form-control" id="exampleInputPassword1" placeholder="your phone">

  </div>
  <div class="form-group">
    <label for="">Date</label>
    <input type="datetime-local" required name="date" class="form-control" id="exampleInputPassword1" placeholder="your phone">

  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
