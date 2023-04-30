@include('ADMIN.nav')
<div class="edit " style="margin:0 25% auto;" >
    <div class="card">
    <div class="card-head">
        <h1 class="text-center">Reply Feedback</h1>
        </div>
        <div class="card-body">


		<form action="{{route('feedback.update', $update->feedback_id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Subject</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" name="subject" class="form-control" value="{{$update->subject}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="deskripsi"> {{$update->deskripsi}} </textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Reply</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="reply">{{$update->reply}}</textarea>
                    </div>
                </div>
            
    
				<center><button type="submit" class="btn btn-success"><i class="fas fa-check"></i>&nbsp Edit</button></center>
            </form>
            

        </div>
    </div>
</div>
@include('ADMIN.footer')