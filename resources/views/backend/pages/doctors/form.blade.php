@extends('backend.master')
@section('content')
<div class='row'>



  <form action="{{route('doctor.store')}}" method='post' enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Doctor Name</label>
      <input type="name" required name="name" class="form-control" id="name" placeholder=" Name">
    </div>
    <div class="form-group">
      <label for="image">image</label>
      <input type="file" required name="image" class="form-control" id="image" placeholder=" image">
    </div>

    <div class="form-group">
    <label for="department">Select department</label>
                    <select name="department" required id="department" class="form-select">
                      @foreach($department as $depart)
                        <option value="{{$depart->id}}">{{$depart->name}}</option>
                        @endforeach
                    </select>
                    <div class="validate"></div>
                </div>

   

    <div class="form-group">
      <label for="specialist_at">Select specialist at</label>

      <select name="specialist_id" id="" class="form-control">
        @foreach($specialists as $data)
        <option value="{{$data->id}}">{{$data->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="qualification">Qualification</label>
      <input type="qualification" required name="qualification" class="form-control" id="qualification" placeholder="qualification">
    </div>
    <div class="form-group">
      <label for="mobile_number">mobile_number</label>
      <input type="tel" required name="mobile_number" class="form-control" id="mobile_number" placeholder="mobile_number">
    </div>





    <button type="submit" class="btn btn-primary my-2">Submit</button>
  </form>

</div>

@endsection
