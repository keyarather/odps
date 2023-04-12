@extends('backend.master')
@section('content')
<form action="{{route('specialist.store')}}" method='post'>
@csrf
<div class=" form-group">
  <label for="">Id</label>
  <input type="text" name="Id" class="form-control" id="">
  
  </div>




  <div class="form-group">
    <label for="">Address</label>
    <input type="text" name="Address" class="form-control" id="">

  </div>

  <div class="form-group">
    <label for="">Phn_number</label>
    <select name="Phn_number">

      <option value="active">Active</option>
      <option value="inactive">Inactive</option>

    </select>
  </div>

  <div class="form-group">
    <label for="">Location</label>
    <input type="text" name="Location" class="form-control" id="">
</div>

  <button type="submit" value="submit" class="btn btn-primary">Submit</button>

</form>




@endsection