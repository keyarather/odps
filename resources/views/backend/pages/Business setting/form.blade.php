@extends('master')
@section('content')<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
