@include('ADMIN.nav')


         <!-- Section 1 -->
<div class="tabel2" id="section-2">
    <div class="container-fluid"  width="100%">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Verifikasi Akun
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Keterangan</th>
                                <th width="210px">Action</th>
                            </tr>
                            <?php $number=1; ?>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td><?php echo $number++; ?></td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td><form action="{{route('verifikasiakun.update',$customer->user_id)}}" method="post" enctype="multipart/form-data">
            										{{ csrf_field() }}
													<div class=" row">
												<div class="col">
													<select class="" required="required" name="keterangan" value="{{$customer->keterangan}}" style="color:black; border:0px;">
													<option value="{{$customer->keterangan}}" style="color:black;">{{$customer->keterangan}}</option>
														<option value="Proses" style="color:black;">Process</option>
														<option value="Verifikasi" style="color:black;">Verified</option>
													</select>
												</div>
											</div>
											
											</td>

                                <td>
                                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> 
                                        Simpan</button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#myModal{{$customer->user_id}}"><i class="fas fa-trash-alt"></i>
                                        Hapus</button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                                                        <!-- Modal -->
                            <div class="modal fade" id="myModal{{$customer->user_id}}" role="dialog">
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
                                                onclick="window.location.href='verifikasiakun/delete/{{$customer->user_id}}'">Hapus</button>
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
