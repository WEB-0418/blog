@extends ('layouts.main')

@section('content')
	    <div class="content-wrapper" id="contentWrapper">
      <div class="page-wrapper" id="pageWrapper">
				
				@include ('components.common-header')
				@include ('components.common-nav')
        
        {{ Breadcrumbs::render('catalog') }}

        <section class="catalog">

        	@include ('components.fixed-busket')
          
          <div class="box">

						@include ('catalog.sidebar')
            
            <div class="catalog__block">
            
            	@include ('catalog.top-filters')

							@include ('catalog.products')

							{{ $products->appends(Request::input())->links('catalog.pagination') }}
            
            </div>
          </div>
        </section>

        @include ('catalog.description')

      </div>
		@include ('components.footer')
    </div>
@endsection