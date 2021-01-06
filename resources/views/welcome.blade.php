<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PT BINA RENA SARANA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('landing/img/brs.png')}}" rel="icon">
  <link href="{{ asset('landing/img/brs.png')}}" rel="brs-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('landing/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('landing/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing/css/style.css')}}" rel="stylesheet">
  <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
<body>

</head>

<body>
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>PT BINA REKA SARANA</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#clients">Our Clients</a></li>
          <li><a href="#footer">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Maintenance Measuring at Power Plant <br><span>Business!</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <br><br><br>
          <div class="w3-content w3-display-container" style="max-width:600px">
          @foreach($slider as $p)
              <img class="mySlides" src="{{asset('storage/'.$p->gambarslid)}}" style="width:100%">
              @endforeach
              <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
              </div>
            </div>
            
            <script>
            var slideIndex = 1;
            showDivs(slideIndex);
            
            function plusDivs(n) {
              showDivs(slideIndex += n);
            }
            
            function currentDiv(n) {
              showDivs(slideIndex = n);
            }
            
            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("demo");
              if (n > x.length) {slideIndex = 1}
              if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
              }
              x[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " w3-white";
            }
            </script>
          
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <section id="about">
    @foreach($ab as $p)
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="{{asset('storage/'.$p->gambarab)}}" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>About Us</h2>
              <p>{{ $p->deskripsiab }}</p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </section><!-- #about -->


    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <p>WE PROJECT MAINTENANCE</p>
        </header>

        <div class="row">
        @foreach($service as $p)
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            
            <div class="box">
            <img src="{{asset('storage/'.$p->gambarser)}}" width="100%" height="200px">
            
            <!-- <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div> -->

              <h4 class="title"><a href="">{{$p->judulser}}</a></h4>
              <p class="description">{{$p->deskripsiser}}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
        @foreach($partner as $p)
          <img src="{{asset('storage/'.$p->gambarpart)}}" alt="">
        @endforeach
        </div>

      </div>
    </section><!-- #clients -->
  </main>

  <!--==========================
    Footer
  ============================-->
  
  <section id="footer">
  <footer class="section-bg">
    <div class="footer-top">
      <div class="container">
      <header class="section-header">
      <h3>Contact</h3>
      </header>
        <div class="row">

          <div class="col-lg-6">
          @foreach($kontak as $p)
            <div class="row">

                <div class="col-sm-6">


                  <div class="footer-info">
                    <h4>Google Maps</h4>
                    <iframe src="{{ $p->embed}}" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>

                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Contact Us</h4>
                      Location:<br>
                      {{$p->alamat}}

                      <strong>Email:</strong> {{$p->email }}<br>
                      <strong>Phone:</strong> {{$p->phone}}<br>
                      <strong>Working Hour:</strong>{{$p->hour}}<br>
                    </p>
                  </div>
                

                </div>

            </div>
            @endforeach
          </div>

          <div class="col-lg-6">

            <div class="form">
              
              <h4>Send us a message</h4>
              <form action="{{ url('/send')}}" method="post">

            {{ csrf_field() }}

                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>

          </div>

          

        </div>

      </div>
     
    </div>

    
  </footer>
  
  <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>PT Bina Reka Sarana</strong>. All Rights Reserved
      </div>
    </div><!-- #footer -->
  </section>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('landing/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('landing/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('landing/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('landing/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('landing/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{ asset('landing/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('landing/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('landing/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('landing/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('landing/lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{ asset('landing/contactform/contactform.js')}}"></script>
  <script src="{{ asset('landing/js/main.js')}}"></script>

</body>
</html>
