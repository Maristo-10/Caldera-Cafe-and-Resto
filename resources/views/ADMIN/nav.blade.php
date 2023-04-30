<!DOCTYPE html>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Caldera-Admin</title>
    <meta name="description" charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('images')}}/title.png" rel="icon">

    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('calderastyle/font-awesome/css')}}/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('calderastyle/themify-icons/css')}}/themify-icons.css">
    <link rel="stylesheet" href="{{asset('calderastyle/flag-icon-css/css')}}/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('calderastyle/selectFX/css')}}/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('calderastyle/jqvmap/dist')}}/jqvmap.min.css">

 <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('css')}}/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css')}}//animate.css">
    
    <link rel="stylesheet" href="{{asset('css')}}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('css')}}/aos.css">

    <link rel="stylesheet" href="{{asset('css')}}/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('css')}}/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('css')}}/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{asset('css')}}/flaticon.css">
    <link rel="stylesheet" href="{{asset('css')}}/icomoon.css">
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
    <link rel="stylesheet" href="{{asset('assets/css')}}/style.css">
<!--endCSS-->

    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style>
    .login {
      float: right;
    }

    </style>
    
</head>

<body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{asset('images/images')}}/logocaldera.jpeg" alt="Logo" style="border-radius:25%; width:80px; height:80px"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('images/images')}}/logocaldera.jpeg" alt="Logo" style="border-radius:25%; width:30px; height:30px"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
 
                    <h3 class="menu-title">Website Info</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-key"></i>EVENT & INFORMATION</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="/editevent">EVENT</a></li>
                            <li><i class="fa fa-table"></i><a href="/editgeneral">GENERAL INFORMATION</a></li>
                        </ul>
                    </li>
                
                    <h3 class="menu-title">CUSTOMER </h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>TESTIMONIAL & PROFILE</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="/daftarfeedback">Customer Feedback</a></li>
                            <li><i class="fa fa-table"></i><a href="/datacustomer">Personal Data</a></li>
                            <li><i class="fa fa-table"></i><a href="/verifikasiakun ">Validation Account</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">PAYMENT </h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>CUSTOMER SERVICE</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-box"></i><a href="/editreservation">Customer Reservation</a></li>
                            <li><i class="menu-icon fa fa-fish"></i><a href="/daftarorder">Online Order</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Produk</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Menu</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-pen"></i><a href="/editproduk">Product List</a></li>
                        </ul>
                    </li>
                    
                    <li>  <a href="/" class="btn btn-primary" type="button"><strong>Kunjungi Website</strong></a> 
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-12">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('images/images')}}/logocaldera.jpeg" width="30px" alt="Caldera Admin">
                        </a>
                      
                        <div class="user-menu dropdown-menu" style="background-color:red;"> 
                        
                            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i>
                                        {{ __('Logout') }}   
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
