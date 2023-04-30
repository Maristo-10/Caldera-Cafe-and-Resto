<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Log In-Caldera</title>
	<link href="{{asset('images')}}/title.png" rel="icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/login.css" rel="stylesheet"> 
<script src="js/login.js"></script>

<style>
.login {
    margin-top: 15%;
}
</style>
</head>
<body>
<div class="login"></div>
<div class="container">
	<form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
	<div id="login-box">
		<div class="logo">
			<a href="/"><img src="{{asset('images/images')}}/logocaldera.jpeg" style="width:150px; height:150px;" class="img img-responsive img-circle center-block"/></a>
			<h1 class="logo-caption"><span class="tweak"><strong>L</strong></span>og in</h1>
			
		</div><!-- /.logo -->
		<div class="controls">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
		<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color:black; font-size:15px">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default btn-block btn-custom">Login</button>
                        <div class="form-group row mb-0">
                        
                            <div class="col-md-8 offset-md-4">
                           
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="font-weight:bold;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
			
		</div>
		<br>
	<center><a href="/register" class="btn btn-link" style="font-weight:bold;">Don't have an account?</a></center>
		<br>
	</div>
</div>
<div id="particles-js"></div>

</body>

</html>




