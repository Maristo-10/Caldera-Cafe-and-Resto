@include('ADMIN.nav')
    <body>
        <div id="layoutSidenav">

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Customer
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No Telepon</th>
                                                <th>Gender</th>
                                                <?php $number=1; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $users)
                                            <tr>
                                                    <td><?php echo $number++; ?></td>
                                                    <td>{{$users -> name}}</td>
                                                    <td>{{$users -> alamat}}</td>
                                                    <td>{{$users -> no_telepon}}</td>
                                                    <td>{{$users -> gender}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
              
            </div>
        </div>

    @include('ADMIN.footer')