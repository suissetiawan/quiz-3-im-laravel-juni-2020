@extends('layouts.master')
@section('content')
<div class="card card-primary card-outline">
  <div class="card-body box-profile">
    <h2 class="profile-username"><b>Judul : {{$data -> judul}}</b></h2>
    <h5 class="text-muted">slug : {{ $data -> slug}}</h5>
    <h5 class="text-muted">{{$data -> isi}}</h5>
    <?php $slug = explode(",", $data -> tag);?>
    <div class="row ml-1">
    @foreach($slug as $val)
    <button class="btn btn-sm btn-success mr-1">{{$val}}</button>
    @endforeach
	</div>
  </div>
  <!-- /.card-body -->
    <div class="card-footer p-0">
          <div class="m-2">
            <a href="/artikel"><button type="button" class="btn btn-info ml-3">kembali</button></a>
          </div>
    </div>
</div>
@endsection