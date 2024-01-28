
<style>
   

   section.sec {
    padding: 100px 0px;
    position: relative;
}
.bg-gradient {
    background: linear-gradient(225.35deg,#246694 0,#062338 100%);
}
.sm-title {
}
.title, .title h3 {
    font-size: 22px;
    color: #2b4d7a;
    font-weight: 700;
    line-height: 1.2em;
}
.sm-title h3 {
    margin-bottom: 20px;
}
.title, .title h3 {
    font-size: 22px;
    color: #2b4d7a;
    font-weight: 700;
    line-height: 1.2em;
}
.owl-nav .owl-prev, .owl-nav .owl-next {
    top: 40%;
    position: absolute;
    border-radius: 40px !important;
    color: #ffffff;
    width: 40px;
    height: 40px;
    text-align: center;
}
.owl-nav .owl-prev {
    left: -5%;
}
.owl-nav .owl-next {
    right: -5%;
}
#staff .owl-nav .owl-prev i, .owl-nav .owl-next i {
    color: #fff;
    font-size: 20px;
    position: relative;
    left: 0px;
}
.box-b {
    background-color: #fff;
    padding-bottom: 25px;
    transition: .2s all ease-in-out;
    border-radius: 4px;
    cursor: pointer;
    /* border-bottom: solid 2px #C3E92E; */
    height: auto;
    position: relative;
    box-shadow: 0 5px 10px #9c9c9c;
    margin-bottom: 20px;
}
.box-b .box-img {
    margin-bottom: 15px;
}
.staff .box-img img {
    height: 250px;
    width: 100%;
    /* margin: auto; */
    /* border-radius: 90px; */
}
.box-b h3 {
    text-align: center;
    margin-bottom: 5px;
    font-size: 18px;
    color: #000000;
    font-weight: 600;
}
.box-b p {
    line-height: 1.4;
    font-size: 16px;
    color: #343a40;
    text-align: center;
    margin-bottom: 0px;
    /* font-weight: 400; */
}

</style>
<section class="  bg-gradient" id="executive">
    <div class="container">
        <div class="section-title mb-4">
            {{-- <h4>OUR TEAM</h4> --}}
            <h2>OUR EXECUTIVE</h2>      
          </div>
       
       <div class="row justify-content-center text-center mb-4">
          <div class="col-md-12">
             <div class="owl-carousel owl-theme" id="staff">
                <div class="item">
                    <a href="https://profile.diu.ac/dr.md.asaduzzamanshishir#PersonalInformation" target="_blank">
                   <div class="box-b staff">
                      <div class="box-img">
                         <img src="img/team/Dr. Md. Asaduzzaman.jpg">
                      </div>
                      <h3> Dr. Md. Asaduzzaman</h3>
                      <p>  Executive Head </p>
                   </div>
                    </a>
                </div>
                <div class="item">
                  <a href="https://profile.diu.ac/mohammad.rezaur.rahman#PersonalInformation" target="_blank">
                 <div class="box-b staff">
                    <div class="box-img">
                       <img src="img/team/Mohammad Rezaur Rahman.jpg">
                    </div>
                    <h3> Mohammad Rezaur Rahman </h3>
                    <p>  President </p>
                 </div>
                  </a>
              </div>
                <div class="item">
                    <a href="https://profile.diu.ac/masud#PersonalInformation" target="_blank">
                   <div class="box-b staff">
                      <div class="box-img">
                         <img src="img/team/MD. MASUD PERVEJ PATOARI.jpg">
                      </div>
                      <h3> MD. MASUD PERVEJ PATOARI </h3>
                      <p>  Organizing Secretary</p>
                   </div>
                    </a>
                </div>
                <div class="item">
                  <a href="https://profile.diu.ac/md.najmul.huda#PersonalInformation" target="_blank">
                 <div class="box-b staff">
                    <div class="box-img">
                       <img src="img/team/Md. Najmul Huda.jpg">
                    </div>
                    <h3> Md. Najmul Huda </h3>
                    <p> Finance Secretary</p>
                 </div>
                  </a>
              </div>
              <div class="item">
                <a href="https://profile.diu.ac/rezaurrahman#PersonalInformation" target="_blank">
               <div class="box-b staff">
                  <div class="box-img">
                     <img src="img/team/Rezaur Rahman.jpg">
                  </div>
                  <h3> Rezaur Rahman</h3>
                  <p> Office Secretary</p>
               </div>
                </a>
               </div>
               <div class="item">
                <a href="https://profile.diu.ac/mohammadthaminahsan#PersonalInformation" target="_blank">
               <div class="box-b staff">
                  <div class="box-img">
                     <img src="img/team/Mohammad Thamin Ahsan.jpg">
                  </div>
                  <h3> Mohammad Thamin Ahsan</h3>
                  <p> Publicity and Publications Secretary</p>
               </div>
                </a>
               </div>
                
              
               
               
             
             </div>
          </div>
       </div>
    </div>
 </section>




<script>
      var owl = $('#staff');
  owl.owlCarousel({
    margin:20,
    dots:true,
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
        items: 2
      },
      1000: {
        items:3
      },
      1200: {
        items:4
      }
    }
});

</script>