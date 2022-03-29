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
        <li><a href="" class="nav-link px-2 text-white">Kamar</a></li>
        <li><a href="" class="nav-link px-2 text-white">Fasilitas kamar</a></li>
        <li><a href="" class="nav-link px-2 text-white">Fasilitas Hotel</a></li>
      </ul>
    </div>
  </div>
</header>

@yield('content')
</body>
</html>