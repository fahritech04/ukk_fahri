<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>@yield('title')</title>

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
        <li><a href="{{ route('hotel.index') }}" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="{{ route('kamar.index') }}" class="nav-link px-2 text-white">Kamar</a></li>
        <li><a href="{{ route('fasilitas.index') }}" class="nav-link px-2 text-white">Fasilitas</a></li>
      </ul>
    </div>
    
  </div>
</header>

{{-- carousel --}}
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
 <div class="carousel-inner">
   <div class="carousel-item active ">
     <img src="{{ asset('img/gambar_2.png') }}" class="d-block w-100">
   </div>
 </div>
</div>
@yield('content')

{{-- footer --}}
<div class="container mt-5">
 <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
   <p class="col-md-4 mb-0 text-muted">&copy; 2021 Hotel Hebat</p>

   <ul class="nav col-md-4 justify-content-end">
     <li class="nav-item"><a href="{{ route('hotel.index') }}" class="nav-link px-2 text-muted">Home</a></li>
     <li class="nav-item"><a href="{{ route('kamar.index') }}" class="nav-link px-2 text-muted">Kamar</a></li>
     <li class="nav-item"><a href="{{ route('fasilitas.index') }}" class="nav-link px-2 text-muted">Fasilitas</a></li>
     <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
     <li class="nav-item"><a href="{{ route('hotel.index') }}" class="nav-link px-2 text-muted">About</a></li>
   </ul>
 </footer>
</div>
</body>
</html>