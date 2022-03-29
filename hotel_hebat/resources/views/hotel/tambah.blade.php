@extends('layouts.main')

@section('title', 'Tambah Data Hotel')

@section('content')
<div class="container">
 <div class="card mt-3">
  <div class="card-body">
   <h1>Data Hotel</h1>
   {{-- form Pemesanan --}}
   <div class="mt-5 border-top">
    <form action="" method="POST" enctype="multipart/form-data">
     @csrf
     <div class="row mb-3">
       <label class="col-sm-2 col-form-label">Nama Pemesan</label>
       <div class="col-sm-10">
         <input type="text" class="form-control">
       </div>
     </div>
     <div class="row mb-3">
       <label class="col-sm-2 col-form-label">Email</label>
       <div class="col-sm-10">
         <input type="text" class="form-control">
       </div>
     </div>
     <div class="row mb-3">
       <label class="col-sm-2 col-form-label">No Handphone</label>
       <div class="col-sm-10">
         <input type="text" class="form-control">
       </div>
     </div>
     <div class="row mb-3">
       <label class="col-sm-2 col-form-label">Nama Tamu</label>
       <div class="col-sm-10">
         <input type="text" class="form-control">
       </div>
     </div>
     <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Tipe Kamar</label>
       <div class="col-sm-10">
        <select class="form-select">
          <option selected>Superior</option>
          <option>Delux</option>
          <option>Royal</option>
        </select>
       </div>
     </div>
     <button type="submit" class="btn btn-primary">Konfirmasi Pemesanan</button>
   </form>
   </div>

  </div>
</div>
</div>
@endsection