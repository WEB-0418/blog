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
	
	@include('components.preloader')
	@include('components.mobile-menu')

	<div class="content-wrapper" id="contentWrapper">
	    <div class="page-wrapper" id="pageWrapper">
	        @include('components.common-header')
	        @include('components.common-nav')
	        @include('components.breadcrumbs')


			@yield('static_content')


        </div>
      	@include('components.footer')
    </div>

    @include('components.forms.calculate');    
    @include('components.forms.enter');    
    @include('components.forms.register');    
  	


  @if(Route::currentRouteName() === 'contacts')
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuWuh6Wr4Kh8l6moiEpHyHPjAhLtTSthk"></script>
  @endif
  
	<script src="{{ mix('js/main.js') }}"></script>

  </body>
</html>