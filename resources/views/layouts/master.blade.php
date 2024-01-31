<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">  
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/variables.css') }}" rel="stylesheet">
 

  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  

  <!-- Include jQuery -->
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

<!-- Include Owl Carousel CSS and JS files -->
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<link rel="icon" href="{{ asset('/img/logo1.png') }}" type="image/x-icon"  >



  <title>CDC</title>
</head>

<body>
  <style>
    .footer-top {
      background: #000 !important;
      /* background: linear-gradient(to right, #008080, #135C51) !important;
  /* Replace #008080 and #135C51 with your desired gradient colors */
      color: #fff !important;
    }

    .footer-contact p {
      color: #fff !important;
    }

    .footer-links ul li a,
    i {
      color: #fff !important;
    }

    .footer-links h4 {
      color: #fff !important;
    }

    #footer {
      background: #191919 !important;
    }

    .copyright {
      height: 30px;
    }

    .copyright p {
      color: #fff;
      padding-top: 15px;
    }

    .nav-link:hover {
      color: #C3E92E;
    }

element.style {
}
.navbar-toggler-icon {
  color: red !important;
}
  </style>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a
            href="mailto:contact@example.com">ahsan@diu.ac
          </a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+8801302690340</span></i>
      </div>

      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter" target="_blank"><img src="img/icon/fb.png" alt="" class="icon"></a>
        <a href="#" class="twitter" target="_blank"><img src="img/icon/ins.png" alt="" class="icon"></a>
        <a href="#" class="twitter" target="_blank"><img src="img/icon/youtube.png" alt="" class="icon"></a>
        <a href="#" class="twitter" target="_blank"><img src="img/icon/twiter.png" alt="" class="icon"></a>

      </div>
    </div>
  </section>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a class="navbar-brand" href="{{route('home')}}"><img src="/img/logo1.png" alt="" style="height:70px;width:100px"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('home')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#event">Our Events</a></li>
          <li><a class="nav-link scrollto" href="#executive">Executive</a></li>
          {{-- <li><a class="nav-link scrollto {{ Request::is('blog') ? ' active' : '' }}" href="{{route('blog')}}">Our Blogs</a></li> --}}
          {{-- <li><a class="nav-link scrollto {{ Request::is('contact') ? ' active' : '' }}" href="{{route('contact')}}">Cotact Us</a></li> --}}
          <li><a class="nav-link scrollto" href="#contact">Cotact Us</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
        </ul>
        {{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mobile-nav-toggle" style="height: 30px">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

 
  <main>
    @yield('content')
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <a href="{{route('home')}}" class=""><img src="/img/logo1.png" alt="" style="width:120px;;height:60px;"></a>
            <p class="pt-4">
              Satarkul, Badda, Dhaka-1212, Bangladesh.
              <br>
              <strong>Phone:</strong> +8801302690340<br><span style="padding-left: 52px">+8801939851064</span> <br>

              <strong>Email:</strong> ahsan@diu.ac
              <br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>QUICK LINKS</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about" target="_blank">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#executive" target="_blank">Executive</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact" target="_blank">Contact</a></li>
            </ul>
          </div>

        

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Get in touch our social network for more information.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><img src="img/icon/fb.png" alt="" class="icon"></a>
              <a href="#" class="facebook" target="_blank"><img src="img/icon/ins.png" alt="" class="icon"></a>
              <a href="#" class="facebook" target="_blank"><img src="img/icon/youtube.png" alt="" class="icon"></a>
              <a href="#" class="facebook" target="_blank"><img src="img/icon/twiter.png" alt="" class="icon"></a>

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-flex justify-content-center">
      <div class="copyright">
        <p class=""> © 2023 <strong>DIU</strong>. All rights Reserved. | Developed & Powered by: <strong>IT-Team,
            DIU</strong></p>

        {{-- &copy; Copyright <strong><span></span></strong>. All Rights Reserved --}}
      </div>

    </div>
  </footer><!-- End Footer -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>