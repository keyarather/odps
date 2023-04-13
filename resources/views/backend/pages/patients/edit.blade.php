@extends('backend.master')
@section('content')
<form action="{{route('patient.update', $patient->id)}}" method="post" enctype="multipart/form-data">
@method('PUT')  
@csrf
  <div class="form-group">
    <label for="name"> Name</label>
    <input type="text" name="name" class="form-control" id="name" value="{{$patient->name}}" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="department_id">Department</label>
    <select name="department_id" id="department_id" class="form-control">
    @foreach($departments as $data)  
      <option value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>

  </div>
  <div class="form-group">
      <label for="mobile">Mobile No</label>
      <input type="tel" name="mobile" class="form-control" id="mobile" value="{{$patient->mobile}}" placeholder="Mobile number">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{$patient->email}}" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" name="image" class="form-control" id="image" placeholder="image">
    </div>
    
  <button type="submit" class="btn btn-primary my-2">Update</button>

</form>
@endsection