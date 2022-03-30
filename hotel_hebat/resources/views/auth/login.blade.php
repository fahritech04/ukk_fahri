<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Login</title>

 {{-- asset --}}
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>
 <div class="container mt-5">

  <div class="card">
   <div class="card-header bg-dark text-white">
     Login
   </div>
   <div class="card-body">
   <form action="{{ route('login.store') }}" method="post">
    @csrf  
    <div class="mb-3">
     <label class="form-label">Email</label>
     <input type="email" class="form-control" name="email">
   </div>

    <div class="mb-3">
     <label class="form-label">Password</label>
     <input type="password" class="form-control" name="password">
   </div>

    <div class="mb-3">
     <input type="submit" class="btn btn-primary" value="Login">
   </div>
  </form>
   
   </div>
  </div>
  
  </div>
</body>
</html>