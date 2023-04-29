@extends('frontend.file.master')
@section('content')
<form action="{{route('registrationformshow')}}" method='post' class="vh-100 gradient-custom">
  @csrf
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="firstName">First Name</label>
                    <input type="text" name="first_name" required id="firstName" class="form-control form-control-lg" placeholder="Enter first name" />
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="lastName">Last Name</label>
                    <input type="text" required name="last_name" id="lastName" class="form-control form-control-lg" placeholder="Enter last name" />
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="emailAddress">Email</label>
                    <input type="email" required name="email" id="emailAddress" class="form-control form-control-lg" placeholder="example@gmail.com" />
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                    <input type="tel" required name="phone" id="phoneNumber" class="form-control form-control-lg" placeholder="017xxxxxxxx" />
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="emailAddress">Password</label>
                    <input type="password" required name="password" id="emailAddress" class="form-control form-control-lg" />
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="phoneNumber">Birth Date</label>
                    <input type="date" required name="birthday" id="birthday" class="form-control form-control-lg" />
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="emailAddress">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                    <label class="form-label" for="emailAddress">Role</label>
                    <select name="role" id="role" class="form-control">
                      <option value="patient">Patient</option>
                      <option value="doctor">Doctor</option>
                    </select>
                  </div>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

@endsection()