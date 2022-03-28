@extends('layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>Proud to Belong.</h2>
      <a href="{{route('register')}}" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('img/download.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>WHAT YOU NEED TO RESUME.</h3>
            <p class="fst-italic">
              Below are some of the important credentials you will be required to supply upon resumption.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>5 COPIES COPY OF YOUR ACCEPTANCE FEES RECEIPT.</li>
              <li><i class="bi bi-check-circle"></i> 5 COPIES OF YOUR ADMISSION LETTER.</li>
              <li><i class="bi bi-check-circle"></i> 10 PASSPORT PHOTOGRAPHS.</li>
              <li><i class="bi bi-check-circle"></i> 10 COPIES OF BIRTH CERTIFICATE.</li>
            </ul>
            <p>
             ENSURE YOU HAVE ALL OF THIS CREDENTALS READY AND PRINTED BEFORE YOU RESUME
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="1" class="purecounter">3000</span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter">3</span>
            <p>Departments</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter">16</span>
            <p>Executives</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter">100</span>
            <p>Lecturers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose BUCC?</h3>
              <p>
                BUCC offers a platform for students to learn in-depth about technology and tech innovations as well as gain real world experience on how the technology interacts with the real world to create solutions to problems.
              </p>
              <div class="text-center">
                <a href="{{route('about')}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4> Dr. Kuroyo Shade A<br>PhD.</h4>
                    <p>HOD OF COMPUTER SCIENCE</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Dr. Adekola Olubukola D<br> PhD.</h4>
                    <p>HOD OF SOFTWARE ENGINEERING</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Prof. Idowu Sunday A<br> PhD.</h4>
                    <p>DEAN OF SCHOOL OF COMPUTING AND ENGINEERING SCIENCES</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

   
  

@endsection
