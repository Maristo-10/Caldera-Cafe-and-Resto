@include('nav')


    <section 	class="home-slider owl-carousel img" style="background-image: url(images/backgroundawal2.jpeg);">
      <div class="slider-item">
      	<div class="overlay"></div>
		  @if(session('error'))
          <div class="dropdown">
              <a class="dropdown">
              <div class="alert alert-warning d-flex align-items-center" role="alert">
            <div>
              Hallo {{ Auth::user()->name}} ,{{session('error')}}
            </div>
          </div>
              </a>                   
            </div>
			@endif
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Enjoy</span>
              <h1 class="mb-4">Your Life</h1>
              <p class="mb-4 mb-md-5">“I get way to much happiness from good food.”</p>
              <p> <a href="/menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="../images/images/IMG-20210423-WA0028.jpg" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Best Food</span>
              <h1 class="mb-4">We Serve You With Love</h1>
              <p class="mb-4 mb-md-5">“A house is not a home unless it contains food and fire for the mind as well as the body.”</p>
              <p> <a href="/menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="../images/images/IMG-20210423-WA0027.jpg" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/backgroundawal.jpeg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4"data-aos="fade-up">To Caldera Coffee and Resto</h1>
              <p class="mb-4 mb-md-5">We serve you the best Food & Drink international taste</p>
              <p>< <a href="/menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

   @include('tablejadwal')

    <section class="ftco-about d-md-flex">
    	<div data-aos="flip-right" class="one-half img" style="background-image: url(images/images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2  data-aos="fade-up" class="mb-4">Welcome to <span class="flaticon-kitchen">Caldera</span> Coffee and Resto</h2>
        </div>
        <div>
  				<p style="text-align:justify;"data-aos="fade-left">  Welcome, we will do everything to make you happy. All of our Dishes can satisfy you, I promise you that. Our dishes are healthy. the more you taste it, the healthier you will be.
          <br><br><strong><em>Caldera Cafe And Resto</em></strong> has a wide range of services provided to meet the quality prospects as a restaurant that is of high quality in all aspects but still serves anyone who visits and eats a meal.
          </p>
          
  			</div>
    	</div>
    </section>

   @include('sectionreservation')
   
   
    <center><section class="ftco-gallery" style="height:1000px; width:1000px;">
    	<div class="container-wrap">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
				</ol>
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img class="d-block w-100" src="{{asset('images')}}/images/IMG-20210423-WA0031.jpg" alt="First slide" style="width:1500px; height:850px; border-radius:20px">
				  </div>
				  <div class="carousel-item">
					<img class="d-block w-100" src="{{asset('images')}}/images/IMG-20210423-WA0030.jpg" alt="Second slide" style="width:1500px; height:850px; border-radius:20px">
				  </div>
				  <div class="carousel-item">
					<img class="d-block w-100" src="{{asset('images')}}/images/IMG-20210423-WA0018.jpg" alt="Third slide" style="width:1500px; height:850px; border-radius:20px">
				  </div>
          <div class="carousel-item">
					<img class="d-block w-100" src="{{asset('images')}}/images/IMG-20210423-WA0035.jpg" alt="Third slide" style="width:1500px; height:850px; border-radius:20px">
				  </div>
          <div class="carousel-item">
					<img class="d-block w-100" src="{{asset('images')}}/images/ibukibuk.jpg" alt="Third slide" style="width:1500px; height:850px; border-radius:20px">
				  </div>
          <div class="carousel-item">
					<img class="d-block w-100" src="{{asset('images')}}/images/polisi.jpg" alt="Third slide" style="width:1500px; height:850px; border-radius:20px">
				  </div>
          <div class="carousel-item">
					<img class="d-block w-100" src="{{asset('images')}}/images/kumpulbakti.jpg" alt="Third slide" style="width:1500px; height:850px; border-radius:20px">
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
    	</div>
    </section></center>

    

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4" data-aos="fade-left" sytle="font-weight:bold;">What <br>Caldera Coffee and Resto <br>Do?</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p data-aos="fade-right">
            In addition to providing high quality food and beverages, Caldera Coffee and Resto also often conducts outreach to several villages as a form of awareness and dissemination of better education.
		        </p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <div data-aos="fade-up"
              data-aos-duration="3000" class="block-20" style="background-image: url('images/images/register.jpg');">
              </div>
              <div class="text py-4 d-block">
              	<div class="meta">
                </div>
                <h3 style="font-weight: bold; color:yellow; text-align:center;" class="heading mt-2">Service</h3>
                <p data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine" style="color:red; font-weight:bold;">We provide the best service for every opportunity given to us.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <div  data-aos="fade-up"
                data-aos-duration="3000"  class="block-20" style="background-image: url('images/images/berbagi.jpg');">
              </div>
              <div class="text py-4 d-block">
              	<div class="meta">
                </div>
                <h3 style="font-weight: bold; color:yellow; text-align:center;" class="heading mt-2">Share with Others</h3>
                <p data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine" style="color:red;  font-weight:bold;">Always share with others if there is a chance.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <div clas data-aos="fade-up"
              data-aos-duration="3000"  class="block-20" style="background-image: url('images/images/panorama.jpg');">
              </div>
              <div class="text py-4 d-block">
              	<div class="meta">
                </div>
                <h3 style="font-weight: bold; color:yellow; text-align:center;" class="heading mt-2">Panorama</h3>
                <p data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine" style="color:red; font-weight:bold;">Has a great panorama to enjoy with family.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom">Our Pleasure Customer Feedback </h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p style="text-align:center;" data-aos="fade-up"
           data-aos-anchor-placement="center-center" class="mt-5">Caldera Coffee and Resto really appreciates testimonials or criticisms from customers. <br>Caldera makes this a stepping stone for better quality service and food in the future</p>
          </div>
        </div>
        <div class="row">
		@foreach($feedback as $feedbacks)
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate "style="width: 100%;">
        		<div class="staff" data-aos="flip-right">
      				<div  class="img mb-4" style="background-image: url(images/images/logocaldera.jpeg); "></div>
      				<div class="info text-center">
      					<h3>{{$feedbacks->name}}</h3>
      					<span class="position">{{$feedbacks->subject}}</span>
      					<div class="text">
	        				<p>{{$feedbacks->deskripsi}}</p>
	        			</div>
      				</div>
        		</div>
			</div>
		@endforeach
        </div>	
		</section>

        <section>
    <center><h3 style="font-weight:bold;" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">~ CALDERA COFFEE AND RESTO'S LOCATION ~</h3></center>
    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
      @include('mapcaldera')
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
  <script src="js/feedback.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <script>
          AOS.init();
    </script>
  </body>
</html>