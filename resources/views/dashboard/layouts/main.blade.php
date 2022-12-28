<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  @vite('resources/css/app.css')
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @include('dashboard.layouts.sidebar')
  @include('dashboard.layouts.header')


  <main class="ml-14">
    @yield('container')

  </main>

  
</body>
</html>