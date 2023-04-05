@extends('backend.master')
@section('content')
<form action={{route('patient.store')}} method='post'>
@csrf
  <div class="form-group">
    <label for="name"> name</label>
    <input type="name" name="name"class="form-control" id="" placeholder="name">
  </div>
  <div class="form-group">
    <label for="department">department</label>
    <input type="department"  name="department" class="form-control" id="department" placeholder="department">
    
  </div>
  <div class="form-group">
    <label for="mobile_no">Mobile No</label>
    <input type="tel" name="mobile_no" class="form-control" id="mobile_no" placeholder="Mobile_NO">
  </div>
  <div class="form-group">
    <label for="p_email">Email</label>
    <input type="email" name="p_email" class="form-control" id="p_email" placeholder="P_email">
  </div>
  
  <button type="submit" class="btn btn-primary my-2">Submit</button>

</form>
@endsection