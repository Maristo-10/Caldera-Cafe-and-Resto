@include('nav')

    <!-- Page Content -->
    
    <div class="page-heading contact-heading header-text">
      <div class="container">
    
          <div class="col-mb-12">
         
            <div class="card border-primary mb-6 header-text" style="margin-left:30%; margin-top:17%;" >
  <div style="text-align: center; font-weight: bold;" class="card-header">Pesan</div>
  <div class="card-body">
  <div class="cols">
    <div class="col-sm-8">
    <form action="{{route('quantity.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-6 row">
                    <label style="font-weight:bold;" class="col-sm-8 col-form-label ">Product Label</label>
                    </div>  
                    <div  style="color:red; font-weight:bold;" class="mb-6 row">
                    <label class=" col-sm-12 col-form-label">{{$produks->nama}}</label>
                </div>
                <div style="font-weight:bold;" class="mb-6 row">
                    <label class="col-sm-8 col-form-label">Price</label>
              </div>  
                <div  style="color:red; font-weight:bold;" class="mb-6 row">
                    <label class=" col-sm-12 col-form-label">@currency($produks->harga)</label>
                </div>
                <div class="mb-12 row">
                    <label style="font-weight:bold;" class="col-sm-8 col-form-label">Quantity</label>
                    <div class="col-sm-9">
                        <input type="number" style="color:black;" required="required" id="kuantitas" name="kuantitas"  >
                        <input type="hidden" style="color:black;" name="id_produk" class="form-control" value="{{$produks->id_produk}}">
                        <input type="hidden" style="color:black;" name="harga" class="form-control" value="{{$produks->harga}}">
                        
                    </div>
                </div>
                <br>
				<button type="button" class="btn btn-danger" onclick="window.location.href='/menu'"> Cancel</button>
				<button type="submit" class="btn btn-success" onclick="window.location.href='/shop'"> Order</button>
            </form>
            <br>
            <button type="submit" class="btn btn-warning"  onclick="window.location.href='/shop/{{ Auth::user()->user_id}}'">Check Cart</button>
    </div>
  </div>
    
 
  </div>
</div>
            </div>
          </div>
        </div>
      
    </div>

