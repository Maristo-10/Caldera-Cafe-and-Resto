@include('ADMIN.nav')
<div class="edit">
    <div class="card">
    <h1>Tambah Produk</h1>
        <div class="card-body">


        <form action="{{route('editproduk.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" id="nama" name="nama" class="form-control" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Jenis</label>
                    <div class="col-sm-9">
                        <select class="form-control"  required="required" name="kategori" aria-label="Default select example" >
                        <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" required="required" id="harga" name="harga" class="form-control" >
                    </div>
                </div>
               
                
                
				
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Tambah</button>
            </form>
            

        </div>
    </div>
</div>
@include('ADMIN.footer')