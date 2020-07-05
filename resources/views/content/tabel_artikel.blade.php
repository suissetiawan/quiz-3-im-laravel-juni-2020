@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List Artikel</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th>Nomor</th>
              <th>Judul</th>
              <th>isi artikel</th>
              <th>slug</th>
              <th>tag</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach($data as $key => $val)
              <tr>
              <td>{{$key + 1}}</td>
              <td>{{$val -> judul}}</td>
              <td>{{$val -> isi}}</td>
              <td>{{$val -> slug}}</td>
              <td>{{$val -> tag}}</td>
              <td class="text-center">
              <div class="btn-group">
                <a href="/artikel/{{$val -> id}}">
                  <button type="button" class="btn btn-sm btn-primary mr-1">detail</button>
                </a>
                <a href="/artikel/{{$val ->id}}/edit">
                  <button type="button" class="btn btn-sm btn-warning mr-1">edit</button>
                </a>
                <form action="/artikel/{{$val->id}}" method="POST">
                {{method_field('delete')}}
                @csrf
              <button type="submit" class="btn btn-sm btn-danger mr-1">hapus</button>
                </form>
              </div>
            </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        <a href="/artikel/create" class="btn btn-success">
          <i class="fas fa-plus"> Tambah artikel</i>
        </a>
      </div>
    </div>
  </div>     
@endsection
@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush