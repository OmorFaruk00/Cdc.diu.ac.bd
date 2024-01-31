@extends('layouts.master')
@section('content')
    <style>
        .carousel-item img {
            width: 100%;
            height: 80vh;
            object-fit: cover;

        }

        .event-desc p {
            color: gray !important;
            margin: 20px 0px
        }

        @media only screen and (max-width: 680px) {
            .services .details {
                height: 180px !important;
            }          

            .carousel-item img {
                height: 50vh;
            }

            .find h1 {
                font-size: 28px;
            }

            .event .content h3 {
                font-size: 28px;
                margin-top: 20px;
            }
        }
    </style>

    <!-- Slider section -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        @if ($sliders)
            <div class="carousel-indicators">
                @foreach ($sliders as $index => $item)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>

            <div class="carousel-inner">
                @foreach ($sliders as $index => $item)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ $item->image_path ?? null }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h2>{{ $item->title ?? null }}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Slider section -->

    <section id="about">
        @if ($about)
            <div class="container my-5">
                <div class="row ">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div>
                            {{-- <img src="/img/about.jpg" alt="" class="about-img" > --}}
                            <img class="about-img " src="{{ $about->image_path }}" alt="" width="100%">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 find">
                        <h4>WELCOME TO </h4>
                        <h1>{{ $about->title }}</h1>
                        <div>{!! $about->description !!}</div>
                    </div>
                </div>

            </div>
            </div>
        @endif
    </section>
    <!-- ======= Event Section ======= -->
    <section id="event" class="event">
        @if ($events)
            <div class="section-title">
                {{-- <h4>RUNNING EVENTS</h4> --}}
                <h2 class="">OUR EVENTS</h2>
            </div>
            <div class="container mt-3">
                <div class="row event-body">

                    @foreach ($events as $index => $item)
                        <div class="col-lg-8 col-md-6 col-sm-12 content d-flex flex-column justify-content-center ">
                            <h3>{{ $item->title }}</h3>

                            <div class="event-desc">{!! $item->description !!}</div>

                            <a class="event-btn align-self-start" href="{{ $item->button_link }}"
                                target="_blank">{{ $item->button ?? 'Join Now' }}</a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 order-first order-md-last d-flex align-items-center">
                            <div class="img">
                                <img src="{{ $item->image_path }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    @endforeach

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
        @endif
    </section>

    <!-- ======= Team Section ======= -->
    <section class="  bg-gradient" id="executive">
        @if ($teams)
            <div class="container">
                <div class="section-title mb-4">
                    <h2>OUR EXECUTIVE</h2>
                </div>
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme" id="staff">
                            @foreach ($teams as $team)
                                <div class="item">
                                    <a href="{{ $team->profile_link }}" target="_blank">
                                        <div class="box-b staff">
                                            <div class="box-img">
                                                <img src="{{ $team->image_path }}">
                                            </div>
                                            <h3> {{ $team->name }}</h3>
                                            <p> {{ $team->designation }} </p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <!-- ======= End Team Section ======= -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        @if ($objectives)
            <div class="container py-5">
                <div class="section-title mb-3">
                    <h2> OUR AIMS & OBJECTIVE</h2>
                </div>

                <div class="row gy-5 pb-5">
                    @foreach ($objectives as $index => $item)
                        <div class="col-xl-3 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-delay="200">
                            <div class="service-item">
                                <div class="img">
                                    <img src="{{ $item->image_path }}" class="img-fluid" alt="">
                                </div>
                                <div class="details position-relative">
                                    <div class="icon">
                                        <img src="/img/icon/aim1.png" class="img-fluid" alt="">
                                    </div>
                                    <a href="#" class="stretched-link">
                                    </a>
                                    <div>{!! $item->description !!}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
        @endif
    </section>
    <!-- End Service Item -->

    {{-- Contact --}}
    <x-contact></x-contact>


    <script>
        var owl = $('#staff');
        owl.owlCarousel({
            margin: 20,
            dots: true,
            nav: true,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            autoplay: true,
            autoplayHoverPause: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    </script>
@endsection
