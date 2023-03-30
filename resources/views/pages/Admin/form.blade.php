@extends('master')
@section('content')
    <form>
        <div class="form-group">
            <label for="Doctor Name">Doctor name</label>
            <input type="name" class="form-control" placeholder="Enter name">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
