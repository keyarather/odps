  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>

          <li><a class="nav-link scrollto active" href="{{url('/')}}#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/')}}#about">About</a></li>
          <li><a class="nav-link scrollto" href="{{url('/')}}#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="{{url('/')}}#doctors">Doctors</a></li>



          <li><a class="nav-link scrollto" href="{{url('/')}}#contact">Contact</a></li>
          @guest
          <li><a class="nav-link scrollto" href="{{route('registration.form')}}">Registration</a></li>
          <li>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Login
            </button>
          </li>
          @endguest
          @auth

          <li><a class="nav-link scrollto" href="#contact">{{auth()->user()->name}} </a></li>
          <li><a class="nav-link scrollto" href="{{route('frontend.logout')}}">Logout</a></li>
          @endauth
        </ul>


      </nav>
      <!-- .navbar -->

      <a href="{{url('/')}}#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Medilab</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>