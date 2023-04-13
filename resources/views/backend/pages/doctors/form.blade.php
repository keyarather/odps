@extends('backend.master')
@section('content')
<div class='row'>



<form action ={{route('doctor.store')}} method='post'>
@csrf
  <div class="form-group">
    <label for="name">Doctor Name</label>
    <input type="name" name="name" class="form-control"id="name"  placeholder=" Name">
  </div>
  <div class="form-group">
    <label for="department">Department</label>
    <input type="department" name="department" class="form-control" id="department" placeholder="department">
  </div>

  <div class="form-group">
    <label for="specialist_at">specialist_at</label>
    <input type="specialist_at" name="specialist_at" class="form-control" id="specialist_at" placeholder="specialist_at">
  </div>
  <div class="form-group">
    <label for="qualification">Qualification</label>
    <input type="department" name="qualification" class="form-control" id="department" placeholder="department">
  </div>
  <div class="form-group">
    <label for="mobile_number">mobile_number</label>
    <input type="number" name="mobile_number" class="form-control" id="mobile_number" placeholder="mobile_number">
  </div>
 
 
  


<button type="submit" class="btn btn-primary my-2">Submit</button>
</form>

</div>

@endsection
