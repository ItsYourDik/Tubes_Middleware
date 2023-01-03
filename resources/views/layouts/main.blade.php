<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/script.js')
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,800;1,400;1,900&display=swap" rel="stylesheet">
  <title>{{ $title }}</title>
</head>
<body>
  @include('partials.navbar2')
  
  <div class="container">
    @yield('container')
  </div>

  @include('partials.footer')
  
  
</body>
</html>