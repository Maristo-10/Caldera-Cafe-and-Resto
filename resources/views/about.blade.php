@include('nav')
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(images/images/kumpulbakti.jpg);">

      <div class="slider-item" style="background-image: url(images/images/kumpulbakti.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Caldera Events</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Events</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
@include('tablejadwal')
<br>
<center>
    <section>
        <video style="border-radius:6%" controls border="10px" style="width: 100%; height:600px box-shadow:920px;">
        <source src="video/goodnight.mp4" type="video/webm" />
        </video>
    </section>
  </center>
<br> <br> <br> <br>
    <center>
    <section class="ftco-about d-md-flex">
	@foreach ($event as $vi)
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <h2 data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" class="mb-8" style="font-weight: bold; color:red; font: italic small-caps bold 40px/50px arial, sans-serif; "><strong>{{$vi->event_nama}}</strong></h2>
    	<div>
     <img data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000" src="{{url('images/imageEvent/'.$vi->gambar)}}" width="500px" height="500px" alt="">
      </div>
    	<div class="">
        <div class="">
        </div>
              <div>
            <br>
  				   <center> 
             <h6 data-aos="fade-up"
                data-aos-duration="2100" style="font-weight:bold; color:yellow; text-align:justify-content-center ">{{$vi->event_deskripsi}}</h6></center>
  			    </div>
    	    </div>
          </div>
        </div>
      </div>
		@endforeach
    </section>
    </center>
	<section><br>
  <br><br><br>

<!-- Kosong -->


	</section>

	@include('mapcaldera')


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