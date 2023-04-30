<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Caldera Coffee and Resto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('images')}}/title.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css')}}/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/animate.css">
    
    <link rel="stylesheet" href="{{asset('css')}}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('css')}}/flaticon.css">
    <link rel="stylesheet" href="{{asset('css')}}/icomoon.css">
    <link rel="stylesheet" href="{{asset('css')}}/aos.css">

    <link rel="stylesheet" href="{{asset('css')}}/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('css')}}/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('css')}}/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{asset('css')}}/flaticon.css">
    <link rel="stylesheet" href="{{asset('css')}}/icomoon.css">
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
    <link rel="stylesheet" href="{{asset('css')}}/feedback.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
    .login {
      float: right;

      
    }
    .jadwal-fb :hover{
      background-color:green;
    }
    .jadwal-ig:hover{
      background-color:green;

    
    }
    .nama_info{
        color: red;
        font-weight:20px;
      }

    </style>
<script>
function myFunction() {
  alert("You must Log in before buy this product!");
 
}
</script>
<script>
 function myFeedbackFunction() {
  alert("You must Log in before give your comments");
 }
  </script>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar "width="100%">
	    <div class="container">
	      <a class="navbar-brand" href="/"><span class="flaticon-fork-knife"></span>Caldera<br><small><strong>Coffee and Resto</strong></small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
	      <div class="collapse navbar-collapse" id="navbarResponsive">
	        <ul class="navbar-nav ml-auto">
			      <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/menu" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="/services" class="nav-link">Reservation</a></li>
	          <li class="nav-item"><a href="/blog" class="nav-link">Info</a></i></li>
	          <li class="nav-item"><a href="/about" class="nav-link">Events</a></li>
	          <li class="nav-item"><a href="/feedback" class="nav-link">Feedback</a></li>
            @guest
            <li class="nav-item"><a class="nav-link" href="/login">Shop</a></li>
            @else
           <li class="nav-item">
                <a class="nav-link" href="/shop/{{ Auth::user()->user_id}}">Shop</a>
              </li>
          @endguest
            @guest
                            @if (Route::has('login'))
                            <li class="nav-item"><a href="/login" class="nav-link "><button style="border-radius:5%;" class="btn btn-warning nav-item login"><strong>Log In</strong></button></a></li>
                            @endif

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Welcome,&nbsp;{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right logout-cus"  aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i>
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="/editproduk"><i class="fa fa-user"></i> Admin side</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
	        </ul>
	      </div>
		  </div>
	  </nav>
      