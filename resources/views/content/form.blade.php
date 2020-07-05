@extends('layouts.master')
@section('content')
<div class="card ">
<div class="card-header bg-info">
   <h3 class="card-title text-light">Tulis artikel</h3>
</div>
<div class="card-body">
  <form class="form-horizontal" action="/artikel" method="POST">
  	@csrf
    <div class="card-body">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="judul">Judul</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="judul artikel" id="judul" name="judul">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="isi">Isi artikel</label>
        <div class="col-sm-10">
          <textarea id="isi" class="form-control" rows="4" name="isi" placeholder="tulis isi artikel"></textarea>
        </div>
      </div>
       <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="judul">tags</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="example : tag1,tag2,dst" id="tag" name="tag">
        </div>
      </div>
      <button type="submit" class="btn btn-info float-right">Submit</button>
    </div>
    <!-- /.card-footer -->
  </form>
</div>
</div>
@endsection