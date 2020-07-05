@extends('layouts.master')
@section('content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">ERD</h6>
    </div>
    <div class="card-body">
      <div class="text-center">
        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 30rem;" src="{{asset('images/ERD.png')}}" alt="">
      </div>
      <p>Ini murupakan ERD yang digunakan pada database projek ini </p>

    </div>
  </div>
  @endsection