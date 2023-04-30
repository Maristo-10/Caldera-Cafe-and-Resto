<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Feedback</title>
    <link href="{{asset('images')}}/title.png" rel="icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('images')}}/title.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
    .login {
      float: right;
    }

    </style>
  </head>
<body >
    <div class="judul">
        <h6 style='text-align:right;'>Welcome, {{Auth::user()->name }}</h6>,  
        <Center><h2>Data</h2></center>
    </div>
    <br/>
    <center>
    <a href="">
    <button type="button" class="btn btn-primary"  >Add General Information</button>
    </a>
<br><br>
    <h3 style="color:Red;"><b>General Information</b></h3>
    <center><div style="overflow: auto;" class="x">
    
    <table border="1" class="table table-dark"  style="width:1500px; border: 1px solid white">
    
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi </th>
            <th>Gambar</th>
            <th>Opsi</th>
    </tr>

    <tr>

        <td align="center"></td> 
        <td></td>
        <td></td>
        <td><img src="" width="80px" height="80px" alt=""></td>
        <td>
        <button type="button" class="btn btn-info" onclick="window.location.href=''">Edit</button>
        <button type="button" class="btn btn-danger" onclick="window.location.href=''" >Hapus</button>
        </td>
 
    </tr>

 
    </table></center>
</div>
</body>
</html>
