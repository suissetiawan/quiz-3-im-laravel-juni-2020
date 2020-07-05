@extends('layouts.master')
@section('content')
<div class="card ">
<div class="card-header bg-info">
   <h3 class="card-title text-light">Edit Content</h3>
</div>
<div class="card-body">
  <form class="form-horizontal" action="/artikel/{{$data->id}}" method="POST">
    {{method_field('put')}}
  	@csrf
    <div class="card-body">
      <input hidden type="text" value="{{$data->id}}" name="id">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="judul">Judul</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{$data-> judul}}" id="judul" name="judul">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="isi">Isi artikel</label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="4" name="isi">{{$data-> isi}}</textarea>
        </div>
      </div>
       <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="tag">tags</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{$data->tag}}" id="tag" name="tag">
        </div>
      </div>
      <div class="float-right">
      <a href="/artikel" class="btn btn-danger">cancel</a>
      <button type="submit" class="btn btn-info ">update</button>
    </div>
    </div>
    <!-- /.card-footer -->
  </form>
</div>
</div>
@endsection