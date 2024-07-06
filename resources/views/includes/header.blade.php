  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt="Site Logo"> -->
        <h1 class="py-2">EscortsHub</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="/about">About</a></li> -->
          <li class="dropdown">
            <a href="#"><span>Our Locations</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('models', ['city' => 'Goa']) }}" class="city-link">Call Girls in  Goa</a></li>
              <li><a href="{{ route('models', ['city' => 'Raipur']) }}" class="city-link">Call Girls in  Raipur</a></li>
              <li><a href="{{ route('models', ['city' => 'Hyderabad']) }}" class="city-link">Call Girls in  Hyderabad</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="/pricing">Rates</a></li>
          <li><a class="nav-link scrollto" href="/contact">Contact Us</a></li>
          <!-- <div class="mt-5 p-3 bg-warning">
            <h3>Contact Us For 24/7 Booking Escorts </h3>
            <p> <strong>Contact No :</strong><br> +91 9876543210</p>
            <p><strong> Email : </strong><br> raipur7starescorts.com</p>
          </div> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
      
      <a class="btn-getstarted scrollto" href="/contact#info">Book</a>

    </div>
  </header><!-- End Header -->