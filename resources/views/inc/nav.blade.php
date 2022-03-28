 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">

    <div class="announcement">
        <div class="announcement__wrapper">
            <div class="announcement__text">
                <div class="testtimonial">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <div>
                                <p class="annoucement-bar-text">Coming up on the 15th of April BUCC BI-weekly Jogging </p>
                            </div>
                        </div>
                        <div class="mySlides fade">
                            <div>
                                <p class="annoucement-bar-text">There will be departmental prayer session on the 20th May</p>
                            </div>
                        </div>
                        <div class="mySlides fade">
                            <div>
                                <p class="annoucement-bar-text">PUBLIC NOTICE: THE BUCC MOBILE APP WILL BE LIVE BY 5TH OF APRIL </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="container d-flex align-items-center">

         <h1 class="logo me-auto"><a href="/">FHD</a></h1>
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

         <nav id="navbar" class="navbar order-last order-lg-0">
             <ul>
                 <li><a class="active" href="/">Home</a></li>
                 <li><a href="{{ route('about') }}">About</a></li>
                 <li><a href="{{ route('blog') }}">Blog</a></li>
                 <li><a href="{{ route('contact') }}">Contact</a></li>
                 
                 @if (Auth::check())
                 <li><a href="{{ route('careers') }}">Careers</a></li>
                
                 <li><a href="{{ route('forum') }}">Forum</a></li>
                 <li><a href="{{ route('find-class') }}">Find My Class</a></li>
                     <li> <a href=""><i class='bx bxs-user-circle '>{{ Auth::user()->username }}</i></a></li>

                     <a href="{{ route('logout') }}" class="mx-4">Logout</a>
                 @endif

             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

         @if (!Auth::check())
             <a href="{{ route('register') }}" class="get-started-btn">Get Started</a>
         @else
         @endif


     </div>
 </header><!-- End Header -->
