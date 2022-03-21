 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">FHD</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="/">Home</a></li>
          <li><a href="{{route('about')}}l">About</a></li>
          <li><a href="{{route('careers')}}">Careers</a></li>
          <li><a href="{{route('blog')}}">Blog</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('register')}}" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->