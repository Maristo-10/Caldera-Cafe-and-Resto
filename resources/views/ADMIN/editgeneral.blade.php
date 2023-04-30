@include('ADMIN.nav')
<div class="judul">
    <h6 style='text-align:right;'>Welcome<h6>,
            <h3 style="color:Red; text-align:center;"><b>General Information</b></h3>
</div>
<br />
<center>
    <a href="/tambahgeneral">
        <button type="button" class="btn btn-primary">Add General Information</button>
    </a>
    <br><br>

    </center>
        <div style="overflow: auto;" class="x">
            <div class="tabel1" id="section-2">
                <div class="container-fluid ">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            General Information
                        </div>
                        <div class="card-body table-dark">
                            <div class="table-responsive ">
                                <table class="table table-bordered table-striped table-dark" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr style="text-align:center">
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>Opsi</th>
                                        </tr>
                                        <?php $number=1;?>
                                    </thead>
                                    <tbody>
                                        @foreach ($general as $aa)
                                        <tr style="text-align:center"> 
                                            <td>
                                                <?php echo $number++; ?>
                                            </td>
                                            <td>{{$aa->info_nama}}</td>
                                            <td>{{$aa->info_deskripsi}}</td>
                                            <td><img src="{{url('images/'.$aa->gambar)}}" width="80px" height="80px"
                                                    alt=""data-toggle="modal" data-target="#myModal{{$aa->info_id}}">
                                            </td>
                                            <td width="20%"><button type="button" class="btn btn-info"
                                                    onclick="window.location.href='/generalform/edit/{{$aa->info_id}}'"><i
                                                        class="fas fa-edit"></i>&nbsp Edit</button>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="window.location.href='/generalform/delete/{{$aa->info_id}}'"><i
                                                        class="fas fa-trash-alt"></i>&nbsp Hapus</button>
                                            </td>
                                        </tr>
                                        <!-- gedein gambar -->
                             <div id="myModal{{$aa->info_id}}" class="modal fade" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                      <div class="modal-body">
                                                          <img src="{{url('images/'.$aa->gambar)}}"  class="img-fluid" >
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
            @include('ADMIN.footer')