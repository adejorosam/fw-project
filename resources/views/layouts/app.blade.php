<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    
  <!-- Bootstrap core CSS -->
  <link href="{{ secure_asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link  href="https://use.fontawesome.com/50282e070b.js" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
  
    
</head>
<style>
footer.footer {
  padding-top: 4rem;
  padding-bottom: 4rem;
  margin-bottom: 0;
}
</style>
<body>
    <div id="app">
      @include('inc.navbar')
        <main class="py-4">
          <div class="container">
            @include('inc.message')
            @yield('content')
          </div>
        </main>
        @include('inc.footer')
    </div>
</body>
</html>
