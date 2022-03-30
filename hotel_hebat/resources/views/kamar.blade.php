@extends('layouts.app')

@section('title', 'Kamar')

@section('content')
<div class="container border-top mt-5">
  
  <div class="row">
    <h1 class="col mt-5">Tipe Kamar</h1>
    <div class="col mt-5">
      <a href="{{ route('kamar.create') }}" class="btn btn-primary float-end">Tambah Kamar</a>
    </div>
  </div>
  @foreach ($data as $kamar)
 <div class="card mb-3 " style="max-width: 1080px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('fotokamar/'.$kamar->foto) }}" class="img-fluid rounded-start">
    </div>    
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $kamar->tipe_kamar }}</h5>
        <p class="card-text">{{ $kamar->fasilitas_kamar }}</p>
      </div>
    </div>
  </div>
 </div>
 

 @endforeach
</div>
@endsection