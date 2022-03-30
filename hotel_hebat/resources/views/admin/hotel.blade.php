<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>@yield('title_admin')</title>
 <title>Hotel</title>

 {{-- asset --}}
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>
 {{-- Header --}}
 <header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="" class="text-warning text-decoration-none me-2">Dashboard</a>
    </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('admin.hotel') }}" class="nav-link px-2 text-white">Hotel</a></li>
        <li><a href="{{ route('admin.resepsionis') }}" class="nav-link px-2 text-white">Resepsionis</a></li>
        <li><a href="{{ route('admin.reservasi') }}" class="nav-link px-2 text-white">Reservasi</a></li>
      </ul>
    </div>
    
  </div>
</header>

@yield('admin')
</body>
</html>