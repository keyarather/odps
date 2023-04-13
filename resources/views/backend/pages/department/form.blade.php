@extends('backend.master')
@section('content')
<form action="{{route('department.store')}}" method='post'>
  @csrf

  <div class="form-group">
    <label for="">Department Name</label>
    <input type="text" name="name" class="form-control">

  </div>

  <div class="form-group">
    <label for="status">Status</label>
    <select name="status" class="form-control" id="status">
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
</div>
  <button type="submit"  class="btn btn-primary mt-3">Submit</button>

</form>




@endsection