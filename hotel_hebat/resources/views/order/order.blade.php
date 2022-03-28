@extends('layouts.app')

@section('content')
<div class="container">
 {{-- order --}}
 <form class="row gx-3 gy-2 align-items-center mt-5">
  <div class="col">
    <label class="visually-hidden" for="">Tanggal Check In</label>
    <input type="text" class="form-control" placeholder="Tanggal Check In">
  </div>
  <div class="col">
    <label class="visually-hidden" for="">Tanggal Check Out</label>
    <input type="text" class="form-control" placeholder="Tanggal Check Out">
  </div>
  <div class="col">
    <label class="visually-hidden" for="">Jumlah Kamar</label>
    <input type="text" class="form-control" placeholder="Jumlah Kamar">
  </div>
  <div class="col-auto">
   <a href="{{ route('pesan.index') }}" class="btn btn-primary">Pesan</a>
  </div>
 </form>

 {{-- form Pemesanan --}}
 <div class="mt-5 border-top">
 <h1>Form Pemesanan</h1>
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
@endsection