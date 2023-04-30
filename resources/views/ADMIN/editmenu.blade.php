@include('ADMIN.nav')
<div class="edit " style="margin:0 25% auto;" >
    <div class="card">
    <div class="card-head">
        <h1 class="text-center">Edit Produk</h1>
        </div>
        <div class="card-body">


		<form action="{{route('editproduk.update',$editproduks->id_produk)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
					<input type="hidden" name="id_produk" value="{{$editproduks->id_produk}}">
                        <input type="text" required="required" id="nama" name="nama" class="form-control" value="{{$editproduks->nama}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Jenis</label>
                    <div class="col-sm-9">
                        <select class="form-control"  required="required" name="kategori" aria-label="Default select example" >
						<option value="{{$editproduks->kategori}}">{{$editproduks->kategori}}</option>
                        <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" required="required" id="harga" name="harga" class="form-control"  value="{{$editproduks->harga}}" >
                    </div>
                </div>
               
                
                <center><button type="button" class="btn btn-danger" onclick="window.location.href='/editproduk'"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i>Edit</button></center>
				
            </form>
            

        </div>
    </div>
</div>
@include('ADMIN.footer')