@extends('backend.master')
@section('content')
<form action="{{route('patient.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name"> Name</label>
    <input type="text" required name="name" class="form-control" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="department_id">Department</label>
    <select name="department_id"  id="department_id" class="form-control">
    @foreach($departments as $data)
      <option value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>

  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" required name="image" class="form-control" id="image" placeholder="image">

  </div>
  <div class="form-group">
    <label for="mobile">Mobile No</label>
    <input type="tel" required name="mobile" class="form-control" id="mobile" placeholder="Mobile number">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" required name="email" class="form-control" id="email" placeholder="Enter email">
  </div>

  <button type="submit" class="btn btn-primary my-2">Submit</button>

</form>
@endsection
