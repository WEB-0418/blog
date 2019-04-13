@if ($paginator->hasPages())


<ul class="catalog__pagination">
	@if (!$paginator->onFirstPage())
		<li class="catalog__pagination-prev catalog__pagination-item">
			<a class="catalog__pagination-link" href="{{ $paginator->previousPageUrl() }}">Предыдущая страница</a>
		</li>
	@endif
	
	@foreach ($elements as $element)

	    @if (is_string($element))
	        <li class="catalog__pagination-seporator catalog__pagination-item" aria-disabled="true">
	        	<span class="catalog__pagination-link">_</span>
	        </li>
	    @endif


		@if (is_array($element))
	        @foreach ($element as $page => $url)
	            @if ($page == $paginator->currentPage())
	                <li class="catalog__pagination-active catalog__pagination-item" aria-current="page">
	                	<span class="catalog__pagination-link">{{ $page }}</span>
	                </li>
	            @else
	                <li class="catalog__pagination-item">
	                	<a class="catalog__pagination-link" href="{{ $url }}">{{ $page }}</a>
	                </li>
	            @endif
	        @endforeach
	    @endif

	
	@endforeach


	@if ($paginator->hasMorePages())
		<li class="catalog__pagination-next catalog__pagination-item">
			<a class="catalog__pagination-link" href="{{ $paginator->nextPageUrl() }}">Следующая страница</a>
		</li>
	@endif
</ul>


{{-- {{ dd($paginator->getOptions()) }} --}}



@endif