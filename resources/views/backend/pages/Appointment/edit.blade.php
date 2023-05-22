@extends('backend.master')
@section('content')
<form action="{{route('appointment.update', $edit->id)}}" method="post" >

@method('PUT')
@csrf
  <div class="form-group">
    <label for="your name">your name</label>
    <input type="text" name="name" value="{{$edit->name}}" class="form-control"
     id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
      <label for="email">email</label>
      <input type="email" name="email" value="{{$edit->email}}" class="form-control" id="email" placeholder="email">
    </div>
  <div class="form-group">
    <label for="your phone">your phone</label>
    <input type="tel" name="phone" value="{{$edit->phone}}" class="form-control" id="exampleInputPassword1" class="form-control"  placeholder="your phone">

  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" name="date" class="form-control" value="{{$edit->date}}" id="exampleInputPassword1" class="form-control" placeholder="your phone">

  </div>
  
  <div class="col-md-4 form-group mt-3">
                    <select name="time_slot" required id="time_slot" class="form-select">
                        <option value="">Select Time Slot</option>
                        <option value="">10:00 am - 10:15 am</option>
                        <option value="">10:20 am - 10:35 am</option>
                        <option value="">10:40 am - 10:55 am</option>
                        <option value="">11:00 am - 11:15 am</option>
                        <option value="">11:20 am - 11:35 am</option>
                        <option value="">11:40 am - 11:55 am</option>
                        <option value="">12:00 pm - 12:15 pm</option>
                        <option value="">12:20 pm - 12:35 pm</option>
                        <option value="">12:40 pm - 12:55 pm</option>
                        
                    </select>
                    <div class="validate"></div>
                </div>
                
                <div class="form-group">
      <label for="doctor_id">doctor_iD</label>
      <input type="string" required name="doctor_id" class="form-control" id="doctor_id" placeholder="doctor_ID">
    </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection