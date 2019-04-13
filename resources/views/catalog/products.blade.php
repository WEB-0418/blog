@foreach($products as $product)
	@include('catalog.product', ['product' => $product])
@endforeach