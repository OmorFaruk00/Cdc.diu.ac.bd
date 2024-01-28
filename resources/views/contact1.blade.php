@extends('layouts.master')

@section('title', 'home')

@section('content')
<style>
    @media (max-width: 768px) {
  .carousel-inner .carousel-item > div {
    display: none;
  }
  .carousel-inner .carousel-item > div:first-child {
    display: block;
  }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-start,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
  display: flex;
  // transition-duration: 10s;
}

/* display 4 */
@media (min-width: 768px) {
  .carousel-inner .carousel-item-right.active,
  .carousel-inner .carousel-item-next,
  .carousel-item-next:not(.carousel-item-start) {
    transform: translateX(25%) !important;
  }

  .carousel-inner .carousel-item-left.active,
  .carousel-item-prev:not(.carousel-item-end),
  .active.carousel-item-start,
  .carousel-item-prev:not(.carousel-item-end) {
    transform: translateX(-25%) !important;
  }

  .carousel-item-next.carousel-item-start, .active.carousel-item-end {
    transform: translateX(0) !important;
  }

  .carousel-inner .carousel-item-prev,
  .carousel-item-prev:not(.carousel-item-end) {
    transform: translateX(-25%) !important;
  }
}
</style>

<div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
  <div class="carousel-inner w-100">
    <div class="carousel-item active">
      <div class="col-md-3">
        <div class="card card-body">
          <img class="img-fluid" src="http://placehold.it/380?text=1">
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-body">
          <img class="img-fluid" src="http://placehold.it/380?text=1">
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-body">
          <img class="img-fluid" src="http://placehold.it/380?text=1">
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-body">
          <img class="img-fluid" src="http://placehold.it/380?text=1">
        </div>
      </div>
    </div>
 
   
   
    
    
    <div class="carousel-item">
      <div class="col-md-3">
        <div class="card card-body">
          <img class="img-fluid" src="http://placehold.it/380?text=8">
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-body">
          <img class="img-fluid" src="http://placehold.it/380?text=8">
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection