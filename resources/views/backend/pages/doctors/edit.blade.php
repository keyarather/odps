@extends('backend.master')
@section('content')
<div class='row'>



    <form action="{{route('doctor.update', $doctorInfo->id)}}" method='post' enctype="multipart/form-data">
    @method('PUT')    
    @csrf
        <div class="form-group">
            <label for="name">Doctor Name</label>
            <input type="text" name="name" value="{{$doctorInfo->name}}" class="form-control" id="name" placeholder="Doctor Name">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image" >
        </div>

        <div class="col-md-4 form-group mt-3">
                    <select name="department" required id="department" class="form-select">
                      @foreach($department as $depart)
                        <option value="{{$depart->id}}">{{$depart->name}}</option>
                        @endforeach
                    </select>
                    <div class="validate"></div>
                </div>

        <div class="form-group">
            <label for="specialist_at">Select Specialist at</label>

            <select name="specialist_id" id="" class="form-control">
                @foreach($specialists as $data)
                <option @if($data->id==$doctorInfo->specialist_id) selected @endif value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="qualification">Qualification</label>
            <input type="department" name="qualification" value="{{$doctorInfo->qualification}}" class="form-control" id="department" placeholder="department">
        </div>
        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input type="tel" name="mobile_number" value="{{$doctorInfo->mobile_number}}" class="form-control" id="mobile_number" placeholder="Mobile number">
        </div>





        <button type="submit" class="btn btn-primary my-2">Submit</button>
    </form>

</div>

@endsection