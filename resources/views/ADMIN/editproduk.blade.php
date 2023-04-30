@include('ADMIN.nav')
<div class="judul">
    <h6 style='text-align:right;'>Welcome<h6>,
            <Center>
                <h2 class="text-bold" style="color:black; font-weight:bold">Data Product</h2>
            </center>
</div>
<br />
<center>
    <button type="button" class="btn btn-primary" onclick="window.location.href='tambahproduk/tambah'">Add New Product</button>
    </a>

    </center>
        <div style="overflow: auto;" class="x">
            <form>
                <!-- Section 1 -->
                <div class="tabel1" id="section-2">
                    <div class="container-fluid ">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Product List
                            </div>
                            <div class="card-body table-dark">
                                <div class="table-responsive ">
                                    <table class="table table-bordered table-striped table-dark" id="dataTable"
                                        width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Kategori</th>
                                                <th>Action</th>
                                            </tr>
                                            <?php $number=1;?>
                                        </thead>
                                        <tbody>
                                            @foreach ($produk as $xx)
                                            <tr>

                                                <td align="center">
                                                    <?php echo $number++;?>
                                                </td>
                                                <td>{{$xx->nama}}</td>
                                                <td>@currency($xx->harga)</td>
                                                <td>{{$xx->kategori}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info"><a
                                                            href="/editmenu/edit/{{$xx->id_produk}}"
                                                            style="color:black;"><i class="fas fa-pencil-alt"></i>&nbsp
                                                            Edit</button></a>
                                                    <button button type="button" class="btn btn-danger"><a
                                                            href="/editproduk/delete/{{$xx->id_produk}}"
                                                            style="color:black;"><i class="fas fa-trash-alt"></i>&nbsp
                                                            Delete</a></button>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @include('ADMIN.footer')