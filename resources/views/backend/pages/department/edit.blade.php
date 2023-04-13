@extends('backend.master')
@section('content')
<form action="{{route('department.update', $edit->id)}}" method="post">
@method('PUT')  
@csrf

  <div class="form-group">
    <label for="name">Department name</label>
    <input type="text" name="name" value="{{$edit->name}}" class="form-control">

  </div>

 <div class="form-group">
    <label for="status">Status</label>
    <select name="status" class="form-control" id="status">
      <option @if($edit->status=='active') selected @endif value="active">Active</option>
      <option @if($edit->status=='inactive') selected @endif value="inactive">Inactive</option>
    </select>
</div>
  
  <button type="submit"  class="btn btn-primary mt-3">Update</button>

</form>




@endsection