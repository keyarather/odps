@extends('backend.master')
@section('content')<form>
  
  <div class="form-group">
    <label for="Doctor name">Doctor name</label>
    <input type="Doctor name" name="name" class="form-control" id="Doctor name" aria-describedby="emailHelp" placeholder="Doctor name">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
    
  
  

  <div class="form-group">
    <label for="contact_type">Contact_type</label>
    <input type="Consaltration" name="consaltration" class="form-control" id="Consaltration" aria-describedby="emailHelp" placeholder="consaltration">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="Department">Department</label>
    <input type="Department" name="department" class="form-control" id="Department" aria-describedby="emailHelp" placeholder="Department">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  

  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection