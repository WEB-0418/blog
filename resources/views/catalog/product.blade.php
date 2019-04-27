<div class="catalog__tovar-item tovar-item">
  <div class="tovar-item__img">
  	<a class="tovar-item__img-link" href="#">
  		<img src="{{ $product->thumb }}">
  	</a>
    <button class="tovar-item__favorite"></button>
    <a class="tovar-item__zoom-it" href="{{ $product->image }}" data-fancybox="tovars">Увеличить</a>
  </div>

{{--   @if($product->season)

    <div>{{ $product->season->name }}</div>

  @endif

  @if($product->material)

    <div>{{ $product->material->name }}</div>

  @endif

  @if($product->producer)

    <div>{{ $product->producer->name }}</div>

  @endif --}}

  <div>{{ $product->color_id }}</div>

  <div class="tovar-item__title">{{ $product->name }} № {{ $product->articule }}</div>
  <div class="tovar-item__prive-row">
    {{-- <div class="tovar-item__old-price">300 руб.</div> --}}
    <div class="tovar-item__new-price">{{ $product->price }} руб.</div>
  </div>
  {{-- <div class="tover-item__size-row">Размерный ряд: 39 40 41 42</div> --}}
  <div class="tover-item__size-row">Размер: {{ $product->size }}</div>
</div>