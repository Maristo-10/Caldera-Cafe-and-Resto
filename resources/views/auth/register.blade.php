<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">


    <title>Register</title>
    <link href="{{asset('images')}}/title.png" rel="icon">
    <link href="{{asset('js/vendor/mdi-font/css')}}/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="{{asset('js/vendor/font-awesome-4.7/css')}}/font-awesome.min.css" rel="stylesheet" media="all">


    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{asset('js/vendor/select2')}}/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('js/vendor/datepicker')}}/daterangepicker.css" rel="stylesheet" media="all">

    <link href="{{asset('css')}}/main.css" rel="stylesheet" media="all">
  
</head>

<body >
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration</h2>
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="input-group">
                        <h5 style="color:white;">Nama</h5>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-group">
                        <h5 style="color:white;">E-mail</h5>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>
                        <div class="input-group">
                        <h5 style="color:white;">Password</h5>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color:white; ">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="input-group">
                        <label for="usia" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender" value="{{ old('gender') }}" required autocomplete="new-gender" autofocus>
                                    <option disabled="disabled" selected="selected">Jenis Kelamin</option>
                                    <option  value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <textarea class="input--style-3" type="text" placeholder="Address" name="alamat" value="{{ old('alamat') }}" required autocomplete="new-alamat" autofocus></textarea>
                        </div>
                        <div class="input-group">
                        <label for="no_telepon" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>
                            <input class="input--style-3" type="number" placeholder="Phone" name="no_telepon" value="{{ old('no_telepon') }}" required autocomplete="new-no_telepon" autofocus>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                        </div>
                        <br>
                        <a style="color:white;" href="/login">Already have account</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('js/vendor/jquery')}}/jquery.min.js"></script>
    <script src="{{asset('js/vendor/select2')}}/select2.min.js"></script>
    <script src="{{asset('js/vendor/datepicker')}}/moment.min.js"></script>
    <script src="{{asset('js/vendor/datepicker')}}/daterangepicker.js"></script>
    <script src="{{asset('js')}}/global.js" ></script>


</body>

</html>

