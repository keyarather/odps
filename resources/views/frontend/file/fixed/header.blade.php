<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        

        <h1>Logis</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">patient</a></li>
          <li><a href="{{route('appointment.list')}}">Appointment</a></li>
          <a href="{{route('Doctor.list')}}">Doctor</a>
          <li><a href="services.html">payment</a></li>
         
          <li><a href="contact.html">Contact</a></li>
          <li><a class="get-a-quote" href="get-a-quote.html">Get a appointment</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>