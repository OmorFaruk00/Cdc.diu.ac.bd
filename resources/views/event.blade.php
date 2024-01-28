@extends('layouts.master')

@section('title', 'event')

@section('content')

<section id="page" >
    <div class="container">
     <div class="page-title">
      <h1>Our Events</h1>      
      <a href="{{route('home')}}">Home <img src="img/icon/more-then.png" alt=""></a> <a  href="{{route('event')}}">Events</a>
     </div>
    </div>
  </section>
<section id="event" class="event">
    <div class="section-title mt-5">
        <h4>RUNNING EVENTS</h4>
        <h2 class="">RUNNING EVENTS COMING UP INCLUDE</h2>      
      </div>
   
    <div class="container mt-3">
      <div class="row event-body">
        <div class="col-lg-8 col-md-6 col-sm-12 content d-flex flex-column justify-content-center ">
          <h3>Denpasar Marathon Event 2023</h3>
          <p><img src="img/icon/calender.png" alt="" class="event-icon"> OCT 20, 2023  </p>       
          <p><img src="img/icon/time.png" alt="" class="event-icon"> START 06:00 AM - UNTIL FINISH</p>  
          <p><img src="img/icon/location.png" alt="" class="event-icon">710 1ST ST. EASTON, PA 18042 | CHESTER COUNTY</p>   
         
          <a class="event-btn align-self-start" href="#">learn More</a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 order-first order-md-last d-flex align-items-center">
          <div class="img">
            <img src="/img/event1.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    
      <div class="row event-body mt-5">
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
      </div>

      <div class="row event-body mt-5">
        <div class="col-lg-8 col-md-6 col-sm-12 content d-flex flex-column justify-content-center ">
          <h3>Women Marathon Event 2023</h3>
          <p><img src="img/icon/calender.png" alt="" class="event-icon"> OCT 20, 2023  </p>       
          <p><img src="img/icon/time.png" alt="" class="event-icon"> START 06:00 AM - UNTIL FINISH</p>  
          <p><img src="img/icon/location.png" alt="" class="event-icon">710 1ST ST. EASTON, PA 18042 | CHESTER COUNTY</p>   
         
          <a class="event-btn align-self-start" href="#">Learn More</a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 order-first order-md-last d-flex align-items-center">
          <div class="img">
            <img src="/img/event3.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection