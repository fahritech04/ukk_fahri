@extends('layouts.header')

@section('title', 'Tambah Hotel')

@section('content')
{{-- container --}}
<div class="container mt-5">
 <div class="card">
  <div class="card-header">
    Edit Data Fasilitas Hotel
  </div>
  <div class="card-body">
   <form action="{{ route('fasilitas.update', $data) }}" method="POST">
    @method('put')
    @csrf
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Input File</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" name="gambar" value="{{ $data->gambar }}">
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Fasilitas Hotel</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="fasilitas_hotel" value="{{ $data->fasilitas_hotel }}">
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Keterangan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="keterangan" value="{{ $data->keterangan }}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
   </form>
  </div>
</div>

</div>
@endsection