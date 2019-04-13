@extends ('layouts.main')

@section('content')
	    <div class="content-wrapper" id="contentWrapper">
      <div class="page-wrapper" id="pageWrapper">
				
				@include ('components.common-header')
				@include ('components.common-nav')
        
        <div class="box">
          <ul class="breadcrumbs">
            <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"> Главная</a></li>
            <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"> Каталог</a></li>
            <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#">Мужчинам</a></li>
          </ul>
        </div>
        <section class="catalog">

        	@include ('components.fixed-busket')
          
          <div class="box">

						@include ('catalog.sidebar')
            
            <div class="catalog__block">
            
            	@include ('catalog.top-filters')

							@include ('catalog.products')

							@include ('catalog.pagination')
            
            </div>
          </div>
        </section>

        @include ('catalog.description')

      </div>
		@include ('components.footer')
    </div>
@endsection