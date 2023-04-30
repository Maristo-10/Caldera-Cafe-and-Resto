@include('nav')
<br><br>
<style>
.row{
    padding:10px;
}
.card{
    margin: 0  auto;
}
</style>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
    
          <div class="col-mb-12">
          
          <div class="card" style="margin-bottom:40px">
  <div class="card-body">
  <div class="mb-12 row">
  @foreach($bio as $pesans)
                    <label class="col-sm-4 col-form-label">Name</label>
                    <label class=" col-form-label text-start">{{$pesans->namauser}}</label>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label">Phone Number</label>
                    <label class=" col-form-label text-start">{{$pesans->no_telepon}}</label>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label">Address </label>
                    <label class=" col-form-label text-start">{{$pesans->alamat}}</label>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label"> Payment Method </label>
                    <label class=" col-form-label text-start">0813-1563-7623 (OVO)</label>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label"></label>
                    <label class=" col-form-label text-start">0813-1563-7623 (GOPAY)</label>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label"></label>
                    <label class=" col-form-label text-start">0813-1563-7623 (DANA)</label>
                </div>
                @endforeach
                @foreach($join as $joins)
                <form action="{{route('shop.store')}}" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label">Total Price</label>
                    <label class=" col-form-label text-start">@currency($joins->total)</label>
                    <input type="hidden" required="required" name="total" class="form-control" value="{{$joins->total}}">
                </div>
                @endforeach
  </div>
</div>
            <div class="card border-primary mb-12 header-text" >
          
  <div class="card-header">Checkout</div>
  <div class="card-body">
  <div class="row">
    <div class="col-sm-12">

             
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label">Payment Struct</label>
                    <div class="col-sm-8">
                    <input class="form-control" required="required" id="formFileMultiple"  name="bukti_bayar" type="file" id="formFileMultiple" multiple value="" >           
                    </div>
                    <hr>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label">Alamat anda</label>
                    <div class="col-sm-8">
                    <input class="form-control" required="required" id="formFileMultiple"  name="alamat" type="text" id="formFileMultiple" multiple value="" > 
                    <label style="color:red;">
                    <ul>
                    <li>Note : Hanya melayani Pesanan sekitar Balige</li>
                    <li>Ongkos kirim Gratis</li></label>          
                    </div>
                    <hr>
                </div>
                
                <hr size="9px">
                <hr>
                @foreach($pesan as $pesan)
                <div class="mb-12 row">
                    <label class="col-sm-5 col-form-label">Product Label</label>
                    <label class=" col-form-label text-start">{{$pesan->nama}}</label>
                    <input type="hidden" required="required" name="id_produk" class="form-control" value="{{$pesan->id_produk}}">
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-5 col-form-label">Quantity</label>
                    <label class=" col-form-label text-start">{{$pesan->kuantitas}}</label>
                    <input type="hidden" required="required" name="jumlah" class="form-control" value="{{$pesan->kuantitas}}">
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-5 col-form-label">Total Price</label>
                    <label class=" col-form-label text-start">@currency($pesan->total_harga)</label>
                    <input type="hidden" required="required" name="total_harga" class="form-control" value="{{$pesan->total_harga}}">
                </div>
                <hr>
                @endforeach
                <div class="card-footer">
                <button type="button" class="btn btn-danger" onclick="window.location.href='/shop/delete/{{$pesan->id_checkout}}'">Delete</button>
				        <button type="submit" class="btn btn-success"> Pay</button>
                </div>
				
            </form>
                      
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <br><br><br>
  

