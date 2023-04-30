@include('ADMIN.nav')

<div class="edit " style="margin:0 25% auto;" >
    <div class="card">
        <div class="card-head">
        <h1 class="text-center">Edit Events</h1>
        </div>
   
        <div class="card-body">


		<form action="{{route('event.update',$update->event_id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama Event</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" name="event_nama" class="form-control" value="{{$update->event_nama}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Deskripsi Event</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" name="event_deskripsi" class="form-control"  value="{{$update->event_deskripsi}}" >
                    </div>
                </div>
            
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple"  name="gambar" type="file" id="formFileMultiple" multiple value="{{$update->gambar}}">{{$update->gambar}}
                    </div>
                </div>
                   <center><button type="submit" class="btn btn-success "><i class="fas fa-check"></i>&nbsp Edit</button></center> 
				
            </form>
            

        </div>
    </div>
</div>

@include('ADMIN.footer')