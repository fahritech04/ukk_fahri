<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Reservasi</title>

 {{-- CDN Bootstrap --}}
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
 <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>
{{-- Header --}}
 <header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="{{ route('hotel.index') }}" class="text-warning text-decoration-none me-2">HOTEL HEBAT</a>
    </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('hotel.index') }}" class="nav-link px-2 text-white">Hotel</a></li>
        <li><a href="{{ route('kamar.index') }}" class="nav-link px-2 text-white">kamar</a></li>
        <li><a href="{{ route('fasilitas.index') }}" class="nav-link px-2 text-white">Fasilitas</a></li>
      </ul>
    </div>
  </div>
</header>

<div class="container-fluid">
<div class="card mt-3">
 <div class="card-header">
   Bukti Pemesanan - Hotel Hebat
 </div>
 
 <div class="card-body">
  @foreach ($data as $reservasi)  
   <h5 class="card-title">{{ $reservasi->nama }}</h5>
   <p class="card-text">{{ $reservasi->email }}</p>
   <p class="card-text">{{ $reservasi->no_hp }}</p>
   <p class="card-text">{{ $reservasi->id_kamar }}</p>
   <p class="card-text">{{ $reservasi->tanggal_checkin }}</p>
   <p class="card-text">{{ $reservasi->tanggal_checkout }}</p>
   <p class="card-text border-bottom mb-3">{{ $reservasi->jumlah_kamar }}</p>
   @endforeach
   <a href="" class="btn btn-primary">Cetak</a>
 </div>

</div>
</div>

</body>
</html>