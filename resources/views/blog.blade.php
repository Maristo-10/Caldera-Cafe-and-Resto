@include('nav')
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(images/images/blogslide.jpeg);">

      <div class="slider-item" style="background-image: url(images/images/blogslide.jpeg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread"><em>Caldera</em><br>General Information</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Info</span></p>
            </div>
          </div>
        </div>
      </div>
    </section><br>
   <center> <section>
    <video style="border-radius:6%" controls border="10px" style="width: 900px; height:800px box-shadow:120px;">
    <source src="video/caldera.mp4" type="video/webm" />
  </video>
    </section></center>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4" data-aos="fade-up" style="font-weight:bold;"><strog>Fact About Caldera</strong></h2>
            <p data-aos="fade-right"
              data-aos-offset="300"
              data-aos-easing="ease-in-sine" style="text-align:center">Caldera is one of the UMKM located in Toba Regency, North Sumatra. this UMKM established in 2020.<br>Caldera
              Even though it is still newly established, this UMKM is able to attract people's attention
              surroundings.Especially for the "Culinary" field, UMKM are very popular among young people
              and young women.<br>That's because Caldera also provides Live Music while watching the fans
              Diners dine at the restaurant.<br>The menus provided are also varied, ranging from Western food to
              contemporary dishes with typical Batak nuances and also available Padang cuisine.
            </p>
          </div>
        </div>
        
        <div class="row d-flex">
          @foreach ($general_information as $GI)
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <img data-aos="zoom-in" class="block-20" src="{{url('images/'.$GI->gambar)}}" style=" width:400px;" data-toggle="modal" data-target="#myModal{{$GI->info_id}}">
              <div class="text py-4 d-block">
                <h3 data-aos="fade-left" class="heading mt-2 nama_info">{{$GI->info_nama}}</h3>
                <p data-aos="fade-right" style="text-align:justify;">{{$GI->info_deskripsi}}</p>
              </div>
            </div>
          </div>
           <!-- gedein gambar -->
           <div id="myModal{{$GI->info_id}}" class="modal fade" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                      <div class="modal-body">
                                                          <img src="{{url('images/'.$GI->gambar)}}"  class="img-fluid" >
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
          @endforeach
          </div>
          </div>           
          </div>
          </div>
        </div>
      </div>
    </section>

 
    @include('footer')
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>