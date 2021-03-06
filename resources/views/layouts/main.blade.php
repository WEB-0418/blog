<!DOCTYPE html>
<html lang="ru">
  <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141269798-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-141269798-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('site.description') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="{{"/storage/" . setting('site.fav')}}" rel="shortcut icon">

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title>{{ setting('site.title') }}</title>
  </head>
  <body data-page={{ Route::currentRouteName() }}>

    @include ('components.preloader')
    @include('components.mobile-menu')

		@yield('content')

    <script>
      window.requestParams = {!! json_encode(Request::all()) !!}
    </script>
  	
	  <script src="{{ mix('js/main.js') }}"></script>
  </body>
</html>