@extends('backend.master')
@section('content')
<form action="{{route('appointment.store')}}" method="post" >


@csrf
  <div class="form-group">
    <label for="your name">your name</label>
    <input type="text" required name="name" class="form-control"
     id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
      <label for="email">email</label>
      <input type="email" required name="email" class="form-control" id="email" placeholder="email">
    </div>
    

  <div class="form-group">
    <label for="your phone">your phone</label>
    <input type="tel" required name="phone" class="form-control" id="exampleInputPassword1" placeholder="your phone">
  </div>

  <div class="form-group">
    <label for="">Date</label>
    <input type="date" required name="date" class="form-control" id="exampleInputPassword1" placeholder="your phone">
  </div>
  <div class="col-md-4 form-group mt-3">
  <label for="">time-slot</label>
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
      <label for="department_id">department_iD</label>
      <input type="string" required name="doctor_id" class="form-control" id="doctor_id" placeholder="department_ID">
    </div>
    <div class="col-md-4 form-group mt-3">
  <label for="">department_id</label>
                    <select name="department_id" required id="department_id" class="form-select">
                        <option value="">Select name Slot</option>
                        <option value="">Medicine</option>
                        <option value="">ENT</option>
                        <option value="">Orthopedics</option>
                        <option value="">Gynecology</option>
                        <option value="">Neurology</option>
                        <option value="">Neotrition and dietetics</option>
                        
                    </select>
                    <div class="validate"></div>
                </div>
                
                <div class="form-group">
      <label for="d_id">department_iD</label>
      <input type="string" required name="department_id" class="form-control" id="department_id" placeholder="doctor_ID">
    </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
