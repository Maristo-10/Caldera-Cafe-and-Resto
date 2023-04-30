@include('nav')
    <!-- END nav -->

	<section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Pleasure Customer Feedback </h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Caldera Coffee and Resto really appreciates testimonials or criticisms from customers. <br>Caldera makes this a stepping stone for better quality service and food in the future</p>
          </div>
        </div>
                @guest

        <div class="col-md-10 ftco-animate " >
          <form style="margin-left:150px;"  action="{{route('login')}}" method="post" enctype="multipart/form-data" class="contact-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email">
                </div>
                </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
          @else

        <div class="col-md-10 ftco-animate">
          <form style="margin-left:150px;" action="{{route('feedback.store')}}" method="post" class="contact-form" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" readonly value="{{ Auth::user()->name }}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="email" class="form-control" readonly value="{{ Auth::user()->email }}">
                </div>
                </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required> 
            </div>
            <div class="form-group">  
              <textarea required  cols="30" rows="7" name="deskripsi" class="form-control" placeholder="Please Input Your Message"></textarea>
            </div>
            <div class="form-group">
              <input required type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
        @endguest

        <br><br><br>

      <section>
      <div class="row">
		@foreach($feedback as $feedbacks)
        	<div class="col-lg-3  mb-sm-4 ftco-animate "style="width: 100%;">
        		<div class="staff">
      				<div  class="img mb-4" style="background-image: url(images/images/logocaldera.jpeg); "></div>
      				<div class="info text-center">
      					<h3>{{$feedbacks->name}}</h3>
      					<span class="position">{{$feedbacks->subject}}</span>
      					<div class="text">
	        				<p style="color:white;">{{$feedbacks->deskripsi}}</p>




              <hr/>
                   <a href="#kotak{{$feedbacks->feedback_id}}" class="btn btn-primary" data-toggle="collapse" style="margin-top:10%;">Klik Disini</a>
                  <div id="kotak{{$feedbacks->feedback_id}}" class="collapse" style="color:white; ">
                   {{$feedbacks->reply}}
                </div>
                
	        			</div>
      				</div>
        		</div>
			</div>
		@endforeach
        </div>	
		</section>


				
        </div>
      </div>
    </section>
 

    <div id="map"></div>
    


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