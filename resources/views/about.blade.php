@extends('layouts.master')

@section('title', 'about')

@section('content')

<section id="page" >
    <div class="container">
     <div class="page-title">
      <h1>About Us</h1>      
      <a href="{{route('home')}}">Home <img src="img/icon/more-then.png" alt=""></a> <a  href="{{route('event')}}">About</a>
     </div>
    </div>
  </section>
  {{-- <section>
    <div class="container my-5">
      <div class="row ">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="d-flex">
            <img src="/img/mask1.png" alt="" style="width:300px">
            <img src="/img/mask2.png" alt="" style="width:300px">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 find">
          <h4>WELCOME TO RUNCLUB</h4>
          <h1>ZUNZO - YOUR ULTIMATE RUNNING COMMUNITY</h1>
          <p>Welcome to our vibrant running community, where we organize exciting running events, provide helpful running
            tutorials, and keep you informed with the latest running news.</p>
          <div class="hr">
          </div>
          <a href="#find" class="btn-home">FIND OUT MORE</a>
        </div>
  
      </div>
    </div>
  </section> --}}


  <div class="demo my-5">
    <div class="container">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-12">
                <div id="about-slider" >
                    <div class="about">
                        <div class="pic">
                            <img src="img/slider1.jpg" alt="">
                        </div>
                       
                    </div>
                   
                </div>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-12">
              <div >
                <div class="about-us">
                    <h3 class="about-us-title">About US</h3>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius aliquid perferendis minus dignissimos explicabo omnis praesentium, blanditiis itaque iusto, laboriosam aut sed porro id veritatis beatae molestias labore distinctio quasi, eligendi aspernatur facere. Repellat odio facilis asperiores, esse saepe dignissimos enim, placeat, unde sit eligendi error praesentium animi? Nemo odio molestias beatae dolore soluta vitae cumque praesentium asperiores, quia unde enim inventore esse consequatur atque aut id adipisci numquam sapiente accusamus suscipit doloribus? Natus, dignissimos. Eum, doloribus dolor excepturi quibusdam labore dolores soluta, autem architecto ipsam ullam eligendi saepe neque aperiam quaerat provident? Aliquam numquam, hic velit placeat neque impedit. </p>                   
                </div>
 
               
            </div>
          </div>
        </div>
    </div>
</div>
<div class="demo my-5">
  <div class="container">
      <div class="row">          
          <div class=" col-lg-6 col-md-6 col-sm-12">
              <div class="about-us">
                  <h3 class="about-us-title">Our Mission</h3>
                  <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius aliquid perferendis minus dignissimos explicabo omnis praesentium, blanditiis itaque iusto, laboriosam aut sed porro id veritatis beatae molestias labore distinctio quasi, eligendi aspernatur facere. Repellat odio facilis asperiores, esse saepe dignissimos enim, placeat, unde sit eligendi error praesentium animi? Nemo odio molestias beatae dolore soluta vitae cumque praesentium asperiores, quia unde enim inventore esse consequatur atque aut id adipisci numquam sapiente accusamus suscipit doloribus? Natus, dignissimos. Eum, doloribus dolor excepturi </p>                   
              </div>             
        </div>
        <div class=" col-lg-6 col-md-6 col-sm-12">
          <div id="about-slider" >
              <div class="about">
                  <div class="pic">
                      <img src="img/slider3.jpg" alt="">
                  </div>
                 
              </div>
             
          </div>
      </div>
      </div>
  </div>
</div>

<div class="demo my-5">
  <div class="container">
      <div class="row">
          <div class=" col-lg-6 col-md-6 col-sm-12">
              <div id="about-slider" >
                  <div class="about">
                      <div class="pic">
                          <img src="img/vision.jpg" alt="">
                      </div>
                     
                  </div>
                 
              </div>
          </div>
          <div class=" col-lg-6 col-md-6 col-sm-12">
            <div >
              <div class="about-us">
                  <h3 class="about-us-title">Our Vision</h3>
                  <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius aliquid perferendis minus dignissimos explicabo omnis praesentium, blanditiis itaque iusto, laboriosam aut sed porro id veritatis beatae molestias labore distinctio quasi, eligendi aspernatur facere. Repellat odio facilis asperiores, esse saepe dignissimos enim, placeat, unde sit eligendi error praesentium animi? Nemo odio molestias beatae dolore soluta vitae cumque praesentium asperiores, quia unde enim inventore esse consequatur   </p>                   
              </div>

             
          </div>
        </div>
      </div>
  </div>
</div>

@endsection