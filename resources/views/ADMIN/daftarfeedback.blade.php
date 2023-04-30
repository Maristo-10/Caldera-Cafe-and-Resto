@include('ADMIN.nav')

<body >
    <div class="judul">

    </div>
    <br/>
    <center>
    <h3 style="color:black;">Feedback</h3>
  <div style="overflow: auto;" class="x">
  </center>
    <form >

    <!-- Section 1 -->
<div class="tabel1" id="section-2">
    <div class="container-fluid ">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
               Feedback
            </div>
            <div class="card-body table-dark">
                <div class="table-responsive ">
                    <table class="table table-bordered table-striped table-dark" id="dataTable" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr style="text-align:center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                            <?php $number=1;?>
                        </thead>
                        <tbody>
                            @foreach ($feedback as $b)
                            <tr style="text-align:center">
                                <td><?php echo $number++; ?></td>
                                <td>{{$b->subject}}</td>
                                <td>{{$b->deskripsi}}</td>
                                <td>{{$b->reply}}</td>
                                <td width="15%">
                                <button type="button" class="btn btn-primary" onclick="window.location.href='/daftarfeedback/reply/{{$b->feedback_id}}'" ><i class="fas fa-edit"></i>&nbspReply</button>
                                <button type="button" class="btn btn-danger" onclick="window.location.href='/daftarfeedback/delete/{{$b->feedback_id}}'" ><i class="fas fa-trash-alt"></i>&nbsp Hapus</button>
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
</div>
@include('ADMIN.footer')
