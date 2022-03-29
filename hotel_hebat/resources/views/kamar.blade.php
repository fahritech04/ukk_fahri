@extends('layouts.app')

@section('title', 'Kamar')

@section('content')
<div class="container border-top mt-5">
  @foreach ($data as $kamar)
    
  
 <h1 class="mt-5">Tipe Kamar</h1>
 <div class="card mb-3" style="max-width: 1080px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('img/tipe_1.jpg') }}" class="img-fluid rounded-start">
    </div>    
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $kamar->tipe_kamar }}</h5>
        <p class="card-text">{{ $kamar->fasilitas_kamar }}</p>
      </div>
    </div>
  </div>
 </div>

 <div class="card mb-3 mt-5" style="max-width: 1080px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('img/tipe_2.jpg') }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
 </div>
 
 <div class="card mb-3 mt-5" style="max-width: 1080px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('img/tipe_3.jpg') }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
 </div>
 @endforeach
</div>
@endsection