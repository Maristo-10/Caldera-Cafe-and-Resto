@include('ADMIN.nav')
    <div class="judul">
        <h3 style="color:black; text-align:center;">Customer's Order List</h3>
    </div>
    <br/>

            <!-- Section 1 -->
            <div class="tabel1" id="section-2">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Order List
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th> Nama Customer </th>
                                            <th>Total Order</th>
                                            <th>Alamat</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $number=1;?>
                                    </thead>
                                    <tbody>
                                    @foreach($order as $orders)
                                        <tr>
                                            <td><?php echo $number++; ?></td>
                                            <td> {{$orders->name}} </td>
                                            <td> @currency($orders->total) </td>
                                            <td>  {{$orders->alamat}} </td>
                                            <td><img src="{{url('buktibayar/'.$orders->bukti_bayar)}}" width="80px" height="80px" alt="" data-toggle="modal" data-target="#myModal{{$orders->order_id}}"></td>
                                            <td><form action="{{route('daftarorder.update',$orders->order_id)}}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}


                                                            <select class="form-control"  required="required" name="keterangan" aria-label="Default select example" >
                                                                <option value="{{$orders->keterangan}}">{{$orders->keterangan}}</option>
                                                                <option value="Verifikasi">Verify</option>
                                                                <option value="On Process">On Process</option>
                                                                <option value="Done">Done</option>
                                                            </select>
                                                </td>
                                                <td><button type="button" class="btn btn-warning" onclick="window.location.href='detailpemesanan/{{$orders->order_id}}'"><i class="fas fa-info"></i> Detail Orders</button>
                                            <button type="submit" class="btn btn-info"><i class="fas fa-save"></i>Save Status</button>
                                            </form>
                                            </td>
                                      
                                        </tr>
                    <!-- gedein gambar -->
                            <div id="myModal{{$orders->order_id}}" class="modal fade" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                      <div class="modal-body">
                                                          <img src="{{url('buktibayar/'.$orders->bukti_bayar)}}"  class="img-fluid" >
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
