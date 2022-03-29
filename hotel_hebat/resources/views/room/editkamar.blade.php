@extends('layouts.header')

@section('title', 'Tambah kamar')

@section('content')
{{-- container --}}
<div class="container mt-5">
 <div class="card">
  <div class="card-header">
    Edit Data Kamar
  </div>
  <div class="card-body">
   <form action="{{ route('kamar.update', $data) }}" method="POST">
    @method('put')
    @csrf
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Tipe Kamar</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="tipe_kamar" value="{{ $data->tipe_kamar }}">
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Fasilitas Kamar</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="fasilitas_kamar" value="{{ $data->fasilitas_kamar }}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
   </form>
  </div>
</div>

</div>
@endsection