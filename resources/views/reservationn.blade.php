

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="Colrolib">
    <meta name="keywords" content="Colrolib Templates">


    <title>Reservation-Form</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/mainn.css" rel="stylesheet" media="all">
</head>

<body>

    <div class="page-wrapper bg-img-1 p-t-165 p-b-100">
        <div class="wrapper wrapper--w720">
            <div class="card card-3">
                <div class="card-body">
                    <ul class="tab-list">
                        <li class="tab-list__item active">
                            <a class="tab-list__link" href="#tab1" data-toggle="tab">Custom your Party</a>
                        </li>
                       
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <form action="{{route('reservation.store')}}"  method="post" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            <div class="input-group">
                                <label class="label">Kategori Acara:</label>
                            
                                    <select name="kategori_reservation">
                                                    <option selected="selected">BIRTHDAY PARTY</option>
                                                    <option>ANNIVERSARY</option>
                                                    <option>MEETING</option>
                                                    <option>PARTY CUSTOM</option>
                                                </select>
                                </div>
                                <div class="input-group">
                                <label class="label">Deskripsi Acara:</label>
                                    <input class="input--style-1" type="text" name="deskripsi">
                                </div>
                                <div class="input-group">
                                <label class="label">Nama Pemesan Reserpasi:</label>
                                    <input class="input--style-1" type="text" name="nama_custrev">
                                </div>
                                <div class="input-group">
                                <label class="label">Alamat Pemesan Reserpasi:</label>
                                    <input class="input--style-1" type="text" name="alamat_custrev">
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">check-in</label>
                                            <input class="input--style-1" type="date" name="tanggal"  id="input-start">
                                            <i class="zmdi zmdi-calendar-alt input-group-symbol"></i>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                    <div class="input-group">
                                            <label class="label">time:</label>
                                            <i class="zmdi zmdi-time input-group-symbol"></i>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="time-pickup">
                                                
                                                    <option selected="selected">10:00 AM</option>
                                                    <option>4:00 PM</option>
                                                    <option>6:00 PM</option>
                                                    <option>8:00 PM</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <label class="label">Bukti Pembayaran</label>
                                    <i class="zmdi zmdi-account-add input-group-symbol"></i>
                                    <div class="input-group-icon" id="js-select-special">
                                    <input class="form-control" name="bukti_bayar" type="file" id="formFileMultiple" required>
                                        <i class="zmdi zmdi-chevron-down input-icon"></i>
                                    </div>
                                  </div>
                                <button class="btn-submit" type="submit">Pesan</button>
                                <button class="btn-submit" style="background-color:red; "  onclick="window.location.href='/services'">back</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>


    <script src="js/global.js"></script>

</body>

</html>
