@extends('backend.master')
@section('content')
<form action="{{route('specialist.update', $info->id)}}" method='post'>
    @method('PUT')
    @csrf

    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="{{$info->name}}" class="form-control" id="">

    </div>

    <div class="form-group">
        <label for="">Select Status</label>
        <select name="status" class="form-control">

            <option  @if($info->status='active') selected @endif value="active">Active</option>
            <option @if($info->status='inactive') selected @endif value="inactive">Inactive</option>

        </select>
    </div>


    <button type="submit" value="submit" class="btn btn-primary mt-3">Update</button>

</form>







@endsection