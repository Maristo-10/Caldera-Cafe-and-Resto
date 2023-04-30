@include('ADMIN.nav')
<body>

    <br />
    <center>
        </a>
        <h3 style="color:black;">Reservation</h3>
        </center>
            <div style="overflow: auto;" class="x">
                <form>
                    <!-- Section 1 -->
                    <div class="tabel1" id="section-2">
                        <div class="container-fluid ">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    Reservation
                                </div>
                                <div class="card-body table-dark">
                                    <div class="table-responsive ">
                                        <table class="table table-bordered table-striped table-dark" id="dataTable"
                                            width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center">No</th>
                                                    <th style="text-align:center">Nama Acara</th>
                                                    <th style="text-align:center">Kategori Acara</th>
                                                    <th style="text-align:center">Nama Pemesan</th>
                                                    <th style="text-align:center">Alamat Pemesan</th>
                                                    <th style="text-align:center">Tanggal</th>
                                                    <th style="text-align:center">Bukti Bayar</th>
                                                    <th style="text-align:center">Action</th>
                                                </tr>
                                                <?php $number=1;?>
                                            </thead>
                                            <tbody>
                                                @foreach ($reservation as $p)
                                                <tr>

                                                    <td style="text-align:center">
                                                        <?php echo $number++; ?>
                                                    </td>
                                                    <td style="text-align:center">{{$p->deskripsi}}</td>
                                                    <td style="text-align:center">{{$p->kategori_reservation}}</td>
                                                    <td style="text-align:center">{{$p->nama_custrev}}</td>
                                                    <td style="text-align:center">{{$p->alamat_custrev}}</td>
                                                    <td style="text-align:center">{{$p->tanggal}}</td>
                                                    <td width="120px" style="text-align:center"><img
                                                            src="{{url('images/'.$p->bukti_bayar)}}" width="80px"
                                                            height="80px" alt="" data-toggle="modal" data-target="#myModal{{$p->reservationorder_id}}"  ></td>
                                                    <td style="text-align:center">
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="window.location.href='/editreservation/delete/{{$p->reservationorder_id}}'">Hapus</button>
                                                    </td>

                                                </tr>
                                                 <!-- gedein gambar -->
                            <div id="myModal{{$p->reservationorder_id}}" class="modal fade" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                      <div class="modal-body">
                                                          <img src="{{url('images/'.$p->bukti_bayar)}}"  class="img-fluid" >
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @include('ADMIN.footer')