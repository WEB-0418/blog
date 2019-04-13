{{-- <div class="box">
  <ul class="breadcrumbs">
    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"> Главная</a></li>
    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"> Каталог</a></li>
    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#">Мужчинам</a></li>
  </ul>
</div> --}}



@if (count($breadcrumbs))
	<div class="box">
	    <ul class="breadcrumbs">
	        @foreach ($breadcrumbs as $breadcrumb)

	            @if ($breadcrumb->url && !$loop->last)
	                <li class="breadcrumbs__item">
	                	<a class="breadcrumbs__link" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
	                </li>
	            @else
	                <li class="breadcrumbs__item active">
	                	<span class="breadcrumbs__link">{{ $breadcrumb->title }}</span>
	                </li>
	            @endif

	        @endforeach
	    </ul>
	</div>
@endif