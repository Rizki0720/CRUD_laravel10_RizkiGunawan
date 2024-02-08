<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
       <nav class="navbar navbar-expand-lg bg-body-tertiary mx-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">Academic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-1">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('students')}}">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('dosen')}}">Dosen</a>
        </li>
        @auth
        <li class="nav-item d-flex align-items-center">
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="border-0 bg-transparent">Logout</button>
          </form>
        </li>
        @endauth
        
      </ul>
    </div>
  </div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>

        
    </div>
</body>
</html>
