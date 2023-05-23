  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">ASM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>

          <li><a class="nav-link scrollto active" href="{{url('/')}}#hero">Home</a></li>
          
          
          <li><a class="nav-link scrollto" href="{{url('/')}}#doctors">Doctors</a></li>
          @auth
          <li><a class="nav-link scrollto" href="{{route('history')}}">patient profile</a></li>
          @endauth




          <li><a class="nav-link scrollto" href="{{url('/')}}#contact">Contact</a></li>


          @auth


<a href="{{route('user.profile')}}" class="nav-item nav-link">
    {{auth()->user()->name}}</a>
 <a href="{{route('frontend.logout')}}" class="nav-item nav-link">Logout</a>
@else
<a class="nav-link scrollto" href="{{route('registration.form')}}">Registration</a>
<a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
              Login
</a>
            @endauth       


      </nav>
      <!-- .navbar -->
     

      <a href="{{url('/')}}#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to ASM</h1>

      <a href="#about" class="btn-get-started scrollto"></a>
    </div>
  </section><!-- End Hero -->



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('loginform')}}" method="post">
          @csrf
          <div class="modal-body">

            <input required name="email" type="email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
            <input required name="password" type="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">login</button>
           
          </div>
        </form>
      </div>
    </div>
  </div>
