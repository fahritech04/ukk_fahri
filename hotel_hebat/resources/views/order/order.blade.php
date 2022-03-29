@extends('layouts.header')

@section('content')
<div class="container">
 {{-- form Pemesanan --}}
 <div class="mt-5 border-top">
 <h1 class="mt-3">Form Pemesanan</h1>
 <form action="{{ route('pesan.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Nama Pemesan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">No Handphone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="no_hp">
    </div>
  </div>
  <div class="row mb-3">
   <label class="col-sm-2 col-form-label">Tipe Kamar</label>
    <div class="col-sm-10">
     <select class="form-select" name="id_kamar">
      @foreach ($data as $position)
      <option value="{{ $position->id }}">{{ $position->tipe_kamar }}</option>
      @endforeach
     </select>
    </div>
  </div>
  <div class="row mb-3">
   <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col">
          <label class="visually-hidden" for="">Tanggal Check In</label>
          <input type="date" class="form-control" placeholder="Tanggal Check In" name="tanggal_checkin">
        </div>
        <div class="col">
          <label class="visually-hidden" for="">Tanggal Check Out</label>
          <input type="date" class="form-control" placeholder="Tanggal Check Out" name="tanggal_checkout">
        </div>
        <div class="col">
          <label class="visually-hidden" for="">Jumlah Kamar</label>
          <input type="number" class="form-control" placeholder="Jumlah Kamar" name="jumlah_kamar">
        </div>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Konfirmasi Pemesanan</button>
</form>
</div>
 
</div>
@endsection