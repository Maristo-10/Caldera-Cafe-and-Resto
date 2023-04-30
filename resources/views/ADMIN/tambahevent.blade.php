@include('ADMIN.nav')
<div class="edit">
    <div class="card">
    <h1>Tambah event</h1>
        <div class="card-body">


		<form action="{{route('tambah.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama Event</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" name="event_nama" class="form-control" value="" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Deskripsi Event</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" name="event_deskripsi" class="form-control"  value="" >
                    </div>
                </div>
            
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple"  name="gambar" type="file" id="formFileMultiple" multiple value="">
                    </div>
                </div>
    
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i>tambah</button>
            </form>
            

        </div>
    </div>
</div>
@include('ADMIN.footer')