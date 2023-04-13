@extends('backend.master')
@section('content')
<form action="{{route('chamber.store')}}" method='post'>
@csrf
<div class=" form-group">
  <label for="">name</label>
  <input type="text" name="name" class="form-control" id="">
  
  </div>




  <div class="form-group">
    <label for="">Address</label>
    <input type="text" name="address" class="form-control" id="">

  </div>

  

  <div class="form-group">
    <label for="">Location</label>
    <input type="text" name="location" class="form-control" id="">
</div>

  <button type="submit"  class="btn btn-primary">Submit</button>

</form>




@endsection