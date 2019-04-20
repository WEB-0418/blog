<div class="catalog__filter-col filter-col">
  <form action="/catalog">
  <div class="filter-col__title filter-col__title_first">Категории</div>
  <div class="filter-col__drop-title">Мужские носки</div>
  <ul class="filter-col__drop-content">
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Носки</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Белье</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Леггинсы</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Трикотаж</a></li>
  </ul>
  <div class="filter-col__drop-title">Женские носки</div>
  <ul class="filter-col__drop-content">
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Носки</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Белье</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Леггинсы</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Трикотаж</a></li>
  </ul>
  <div class="filter-col__drop-title">Детские носки</div>
  <ul class="filter-col__drop-content">
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Носки</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Белье</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Леггинсы</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Трикотаж</a></li>
  </ul>
  <div class="filter-col__drop-title">Леггинсы женские</div>
  <ul class="filter-col__drop-content">
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Носки</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Белье</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Леггинсы</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Трикотаж</a></li>
  </ul>
  <div class="filter-col__drop-title">Мужское белье</div>
  <ul class="filter-col__drop-content">
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Носки</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Белье</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Леггинсы</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Трикотаж</a></li>
  </ul>
  <div class="filter-col__drop-title">Женское белье</div>
  <ul class="filter-col__drop-content">
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Носки</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Белье</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Леггинсы</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Трикотаж</a></li>
  </ul>
  <div class="filter-col__drop-title">Трикотаж</div>
  <ul class="filter-col__drop-content">
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Носки</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Белье</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Леггинсы</a></li>
    <li class="filter-col__drop-content-item"><a class="filter-col__drop-content-link" href="#">Трикотаж</a></li>
  </ul>
  <div class="filter-col__title">СОРТИРОВАТЬ ПО</div>
  <div class="filter-col__price-range">
    <div class="filter-col__range-block">
      <div class="filter-col__price-title">Цена</div>
      <div id="range" 
        data-min="{{ $products->pluck('price')->min() }}" 
        data-max="{{ $products->pluck('price')->max() }}"
      ></div>
      <div class="filter-col__price-inputs-row">
        <input class="filter-col__price-input" id="leftDigit">
        <input class="filter-col__price-input" id="rightDigit">
      </div>
    </div>
    <div class="filter-col__sort-kind-outer">
      <div class="filter-col__sort-kind-title">Сезон</div>
      <ul class="filter-col__sort-kind-list">

        @foreach($seasons as $season)

          <li class="filter-col__sort-kind-item">

            @if (Request::has('seasons'))

            <input class="filter-col__sort-input" type="checkbox" id="season{{$season->id}}" hidden name='seasons[]' value="{{$season->id}}" 
              {{ in_array($season->id, Request::get('seasons')) ? 'checked' : null }}
            >

            @else

            <input class="filter-col__sort-input" type="checkbox" id="season{{$season->id}}" hidden name='seasons[]' value="{{$season->id}}" >

            @endif

{{--             <input class="filter-col__sort-input" type="checkbox" id="check{{$season->id}}" hidden name='seasons[]' value="{{$season->id}}" 
              {{ 
                in_array(
                  $season->id, 
                  Request::has('seasons') 
                  ? (Request::get('seasons') ? 'checked' : null )
                  : []
                )
              }}
            >
 --}}

            <label class="filter-col__sort-kind-label" for="season{{$season->id}}">{{ $season->name }}</label>
          </li>

        @endforeach

      </ul>
    </div>
    <div class="filter-col__sort-kind-outer">
      <div class="filter-col__sort-kind-title">Материал</div>
      <ul class="filter-col__sort-kind-list">

        @foreach($materials as $material)

          <li class="filter-col__sort-kind-item">

            @if (Request::has('materials'))

            <input class="filter-col__sort-input" type="checkbox" id="material{{$material->id}}" hidden name='materials[]' value="{{$material->id}}" 
              {{ in_array($material->id, Request::get('materials')) ? 'checked' : null }}
            >

            @else

            <input class="filter-col__sort-input" type="checkbox" id="material{{$material->id}}" hidden name='materials[]' value="{{$material->id}}" >

            @endif

            <label class="filter-col__sort-kind-label" for="material{{$material->id}}">{{ $material->name }}</label>
          </li>

        @endforeach

      </ul>
    </div>

    <div class="filter-col__sort-kind-outer">
      <div class="filter-col__sort-kind-title">Страна-производитель</div>
      <ul class="filter-col__sort-kind-list">

        @foreach($producers as $producer)

          <li class="filter-col__sort-kind-item">

            @if (Request::has('producers'))

            <input class="filter-col__sort-input" type="checkbox" id="producer{{$producer->id}}" hidden name='producers[]' value="{{$producer->id}}" 
              {{ in_array($producer->id, Request::get('producers')) ? 'checked' : null }}
            >

            @else

            <input class="filter-col__sort-input" type="checkbox" id="producer{{$producer->id}}" hidden name='producers[]' value="{{$producer->id}}" >

            @endif

            <label class="filter-col__sort-kind-label" for="producer{{$producer->id}}">{{ $producer->name }}</label>
          </li>

        @endforeach

      </ul>
    </div>
  </div>
  <div class="filter-col__btns">
    <input class="btn" type="submit" value="Показать">
    {{-- <input class="btn btn_white btn_border" type="reset" value="Сбросить"> --}}
    <a href="{{ route('catalog') }}" class="btn btn_white btn_border">Сбросить</a>
  </div>
</form>
  @include ('catalog.hits')
  @include ('catalog.promo')

  <button class="filter-col__delivery-calc" id="calc">РАССЧИТАТЬ ДОСТАВКУ</button>
</div>