@include('nav')
    <!-- END nav -->
	<br><br>
    <section class="ftco-menu">
	
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate " >
	    		</div>
	    		<div >
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
				  
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					  <div class="col-md-11">
						<form class="d-flex pull-right" method="POST" action="/menu">
						{{ csrf_field() }}	
						<input  class="form-control me-2 " type="search"  placeholder="Search" aria-label="Search" name="cari" >
						<button class="btn btn-primary"><i class="fa fa-search"></i></button>
						</form>
             		 </div>
					</div>
					
		          </div>
				  
				  
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
						  @foreach ($produk as $proo)
		              		<div class="col-md-3 text-center">
		              			<div data-aos="flip-left"
								data-aos-easing="ease-out-cubic"
								data-aos-duration="2000" class="card" style="height:150px; width:250px; margin-top:5%; background-color:#2A3231 ; margin-right:5%;	">
		              				<div class="text">
									  <br>
		              					<h6 style="color:yellow;">{{$proo->nama}}</h4>
		              					<p></p>
		              					<p class="price" style="color:white;">@currency($proo->harga)</p>
										
						@guest
										<p ><a href="/login" class="btn btn-white btn-outline-white" onclick="myFunction()">Buy</a></p>
								@else
		              					<p ><a href="/quantity/{{$proo->id_produk}}" class="btn btn-white btn-outline-white" >Buy</a></p>
						@endguest
		              				</div>
		              			</div>
		              		</div>
							@endforeach
		              	</div>
		              </div>
					  <center>
							<div class="my-4 justify-content-center">
									{{$produk->links()}}
							</div>
							</center>
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

