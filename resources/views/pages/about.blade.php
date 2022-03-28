@extends('layouts.app')
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p> Encompassing but not limited to all students in Babcock University's School of Computing and Engineering Sciences. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('img/BUCC LOGO.png')}}" class="img-fluid" alt="BUCC LOGO">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>The Babcock University Computer Club is a student chapter of  the University's  Computing and Engineering Sciences Department.
</h3>
            <p class="fst-italic">
            The mission of this club is to  make possible the needs and interests of the computer science and engineering students as well as anybody with an interest in software development and innovation. 
          <br>  We help others by inculcating our spirit of hard-work and creativity, never forgetting our principles of discipline and integrity.
 <br>It is not necessary for any club member to be a student of the department nor is knowledge of any programming language required.

<br>The club has sponsored events such as   exhibitions, programming competitions, hackathons, guest speakers, tech talks, and trips for teams to Silicon Valley.          
          </p>
            
            <!-- <ul> -->
              <!-- <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li> -->
              <!-- <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li> -->
              <!-- <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li> -->
            <!-- </ul> -->
            <p>
            If you have a general interest in computing and want to join, feel free to contact the club at  the BUCC secretariat and we'll include you to our mailing list so you can stay informed of upcoming events. 
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


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>BUCC EXECUTIVES</h2>
          <p>Word from departmental executives</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/PRESIDENT.jpg')}}" class="testimonial-img" alt="P  ">
                  <h3>BLESSED MADUKOMA</h3>
                  <h4>EXECUTIVE PRESIDENT <br> SOFTWARE ENGINERRING</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    A healthy stomach is the source of an innovative mind,<br>FOOD FIRST! <br> EAT <br>SLEEP<br>CODE<br>REPEAT<br>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/VP ADMIN.jpg')}}" class="testimonial-img" alt="VP ADMIN">
                  <h3>ADEBIYI ABIOLA ESTHER</h3>
                  <h4>VICE PRESIDENT ADMINISTRATION <br> COMPUTER INFORMATION SCIENCE</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    The key to success is establishing good relations with your collegues "IN THE MULTITUDE OF COUNSELLORS THERE IS SAFETY" PROVERBS 11:14 .
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/VP ACAD.jpg')}}" class="testimonial-img" alt="">
                  <h3>DADA EZEKIEL</h3>
                  <h4>VICE PRESIDENT ACADEMICS <br> SOFTWARE ENGINEERING</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    "To truly achieve greatness in life, one must conquer self" <br> Walk with God and he will make your ways straight <br>#Pray always <br>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/SPORTS DIRECTOR.jpg')}}" class="testimonial-img" alt="">
                  <h3>IGOH PATRICK</h3>
                  <h4>SPORTS DIRECTOR <br>COMPUTER INFORMATION SCIENCE </h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    "It takes a fit body to stay at the top" <br> #Due diligence <br> #Due care <br>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('img/SOCIAL DIRECTOR.jpg')}}" class="testimonial-img" alt="">
                  <h3>EYOMA DAVID</h3>
                  <h4>SOCIAL DIRECTOR <br>COMPUTER INFORMATION SCIENCE</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    "ALL WORK AND NO PLAY MAKES JACK A DULL BOY". <br>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
@endsection