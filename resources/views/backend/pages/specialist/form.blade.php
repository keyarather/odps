@extends('backend.master')
@section('content')
<form action="{{route('specialist.store')}}" method='post'>
  @csrf

  <div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" class="form-control" id="">

  </div>

  <div class="form-group">
    <label for="">Select Status</label>
    <select name="status">

      <option value="active">Active</option>
      <option value="inactive">Inactive</option>

    </select>
  </div>


  <button type="submit" value="submit" class="btn btn-primary">Submit</button>

</form>







@endsection