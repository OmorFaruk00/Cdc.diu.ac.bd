@extends('layouts.master')

@section('title', 'home')

@section('content')
<style>
  .carousel-item img {
    width: 100%;
    height: 80vh;
    object-fit: cover;

  }

  @media only screen and (max-width: 680px){
  .services .details {    
    height: 180px !important;
  }
  .about-img{
    width: 200px !important;
    height: 200px !important;
  
  }
  .carousel-item img {   
   height: 50vh;
  }
  .find h1{  
    font-size: 28px; 
  }
  .event .content h3 {
    font-size: 28px;
    margin-top: 20px;
  }
}
</style>
<!-- ======= Hero Section ======= -->
{{-- <section id="hero" class="d-flex align-items-center">
  <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <h1>Welcome to Our Club</h1>
    <h2>We are team of talented designers making websites with Bootstrap</h2>
    <div class="d-flex">
      <a href="#about" class="btn-home">Join Our Club</a>
     
    </div>
  </div>
</section> --}}
<!-- End Hero -->

{{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/slider11.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  ">
        <h2> Skills for Better Career</h2>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/slider22.jpg" class="d-block w-100" alt="..." >
      <div class="carousel-caption ">
        <h2> Skills for Better Career </h2>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/slider33.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h2> Skills for Better Career </h2>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> --}}

<!-- In your Blade view -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
      @foreach($sliders as $index => $item)
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
      @endforeach
  </div>
  
  <div class="carousel-inner">
      @foreach($sliders as $index => $item)
          <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
              <img src="{{$item->image_path ?? null}}" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                  <h2>{{ $item->title ?? null }}</h2>
              </div>
          </div>
      @endforeach
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
  </button>
</div>




<section id="about">
  <div class="container my-5">
    <div class="row ">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div>
          {{-- <img src="/img/about.jpg" alt="" class="about-img" > --}}
          <img src="/img/about1.gif" alt="" width="100%">
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 find">
        <h4>WELCOME TO </h4>
        <h1>Career Development Club</h1>
        <p>Every semester, this club organizes different seminars and workshops to help the students prepare themselves for the future professional life which they are going to choose. The CDC invites expertise from different industries to share their on-hand knowledge in a real professional environment with our undergraduate and graduate students. The CDC supervises the students to build a strong network with alumni, different industries to collaborate with the other universities, academic departments, colleges, representatives, and relevant organizations in activities designed to further the aims of the service. We are welcoming our students with an opportunity to develop their skills for a better future.</p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ======= Event Section ======= -->
<section id="event" class="event">
  <div class="section-title">
    {{-- <h4>RUNNING EVENTS</h4> --}}
    <h2 class="">OUR EVENTS</h2>      
  </div>
  <div class="container mt-3">
    <div class="row event-body">
      <div class="col-lg-8 col-md-6 col-sm-12 content d-flex flex-column justify-content-center ">
        <h3>Recruiting New Members</h3>
        {{-- <p><img src="img/icon/calender.png" alt="" class="event-icon"> OCT 20, 2023  </p>       
        <p><img src="img/icon/time.png" alt="" class="event-icon"> START 06:00 AM - UNTIL FINISH</p>  
        <p><img src="img/icon/location.png" alt="" class="event-icon">710 1ST ST. EASTON, PA 18042 | CHESTER COUNTY</p>    --}}
        <span class="my-3" style="text-align: justify">Career development plans are needed things for the students. A plan that helps you do better for your long-term career. DIU Career and Skills Development Club helps you to pursue these skills efficiently. We welcome all of you on this journey.</span> 
       
        <a class="event-btn align-self-start" href="https://docs.google.com/forms/d/e/1FAIpQLSfVHZUh7-3X_HTKWetQieLerw5w-kC6wL0OpOs_3KHN3tb8tA/viewform?fbclid=IwAR3tzHpkld64YvOd59msqdQj-bwa3JtOaMZTw0-X5Z1PNtrASeIMMu7Uzxw" target="_blank">Registration Here</a>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 order-first order-md-last d-flex align-items-center">
        <div class="img">
          <a href="https://www.facebook.com/story.php?story_fbid=pfbid035oZcqUCmNStHzpKHq6UVYN3s6gjwAVvH4pRTYUxYsRy2LDugFNN2tX4wHiuaC9Brl&id=100064878270208&mibextid=Nif5oz&paipv=0&eav=AfZ20Ynh9Qw4xLcxMypsC8qxMFmsA8UL_fHPOpcauIN9zukBaFnt3l2a9PUsLc_PT0A&_rdr" target="_blank">
          <img src="/img/event11.jpg" alt="" class="img-fluid">
        </a>
        </div>
      </div>
    </div>
  
    {{-- <div class="row event-body mt-4">
      <div class="col-lg-8 col-md-6 col-sm-12 content d-flex flex-column justify-content-center ">
        <h3>Women Marathon Event 2023</h3>
        <p><img src="img/icon/calender.png" alt="" class="event-icon"> OCT 20, 2023  </p>       
        <p><img src="img/icon/time.png" alt="" class="event-icon"> START 06:00 AM - UNTIL FINISH</p>  
        <p><img src="img/icon/location.png" alt="" class="event-icon">710 1ST ST. EASTON, PA 18042 | CHESTER COUNTY</p> 
        
       
        <a class="event-btn align-self-start" href="#">Learn More</a>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 order-first order-md-last d-flex align-items-center">
        <div class="img">
          <img src="/img/event2.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div> --}}
  </div>
</section>
<!-- ======= course Section ======= -->
{{-- <x-course></x-course> --}}
<!-- ======= End course Section ======= -->

{{-- <x-blog></x-blog> --}}





<!-- ======= Team Section ======= -->
<x-team></x-team>
<!-- ======= End Team Section ======= -->
<!-- ======= Services Section ======= -->
<x-service></x-service>
{{-- <x-aim></x-aim> --}}
<!-- ======= EndServices Section ======= -->
<!-- ======= F.A.Q Section ======= -->
{{-- <x-faq></x-faq> --}}
<!-- End F.A.Q Section -->

{{-- Contact --}}
<x-contact></x-contact>






@endsection