@include('ADMIN.nav')
<div class="judul">

            <h3 style="color:black; text-align:center;">Event</h3>
</div>
<br />


<!-- Section 1 -->
<div class="tabel1" id="section-2">
    <div class="container-fluid ">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Event List
            </div>
            <div class="card-body table-dark">
                <div class="table-responsive ">
                    <table class="table table-bordered table-striped table-dark" id="dataTable" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th style="text-align:center">No</th>
                                <th style="text-align:center">Nama</th>
                                <th style="text-align:center">Deskripsi</th>
                                <th style="text-align:center">Gambar</th>
                                <th style="text-align:center">Action</th>
                            </tr>
                            <?php $number=1;?>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr style="text-align:center">
                                <td>
                                    <?php echo $number++; ?>
                                </td>
                                <td>{{$event->event_nama}}</td>
                                <td>{{$event->event_deskripsi}}</td>

                                <td><img src="{{url('images/imageEvent/'.$event->gambar)}}" width="80px" height="80px"
                                        alt="" data-toggle="modal" data-target="#myModal{{$event->event_id}}"></td>
                                <td width="20%"><button type="button" class="btn btn-warning"
                                        onclick="window.location.href='/eventform/edit/{{$event->event_id}}'"><i
                                            class="fas fa-edit"></i>
                                        Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#myModal"><i class="fas fa-trash-alt"></i>
                                        Hapus</button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h4 class="modal-title">Hapus Data</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin ingin menghapusnya?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-danger"
                                                onclick="window.location.href='eventform/delete/{{$event->event_id}}'">Hapus</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                             <!-- gedein gambar -->
                             <div id="myModal{{$event->event_id}}" class="modal fade" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                      <div class="modal-body">
                                                          <img src="{{url('images/imageEvent/'.$event->gambar)}}"  class="img-fluid" >
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

<center> <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahEvent'"><i
            class="fas fa-plus"></i> Add Event</button> </center>



@include('ADMIN.footer')