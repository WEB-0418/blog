<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="assets/img/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title>Noski</title>
  </head>
  <body>
    
    @include ('components.preloader')
    @include('components.mobile-menu')

		@yield('content')

    <script>
      window.requestParams = {!! json_encode(Request::all()) !!}
    </script>
  	
	  <script src="{{ mix('js/main.js') }}"></script>
  </body>
</html>