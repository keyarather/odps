@extends('master')
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
    <label for="department">Qualification</label>
    <input type="department" name="qualification" class="form-control" id="department" placeholder="department">
  </div>
 
 
  


<button type="submit" class="btn btn-primary my-2">Submit</button>
</form>

</div>

@endsection
