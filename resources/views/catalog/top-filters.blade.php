

<div class="catalog__filter-block">
  <div class="catalog__trigger-row">
    <button class="btn" id="filterMob">Фильтры</button>
  </div>
  <div class="catalog__filter-row">
    <div class="catalot__select-outer">
      <div class="catalog__select-title">Цвет</div><i class="fas fa-angle-down"></i>
      <select class="catalot__select" name="color">
        <option>Все</option>

        @foreach($colors as $color)
          <option value="{{ $color->id }}">{{ $color->name }}</option>
        @endforeach

      </select>
    </div>
    <div class="catalot__select-outer">
      <div class="catalog__select-title">Размер</div><i class="fas fa-angle-down"></i>
      <select class="catalot__select" name="size">
        <option>Все</option>

        @foreach($sizes as $size)
          <option value="{{ $size }}">{{ $size }}</option>
        @endforeach

      </select>
    </div>
    <div class="catalot__select-outer">
      <div class="catalog__select-title">Бренд</div><i class="fas fa-angle-down"></i>
      <select class="catalot__select" name="brand">
        <option>Все</option>
        @foreach($brands as $brand)
          <option value="{{ $brand->id }}">{{ $brand->name }}</option>
        @endforeach

        </select>
    </div>
    <div class="catalot__select-outer catalot__select-outer_black">
      <div class="catalog__select-title">Сортировать</div><i class="fas fa-angle-down"></i>
      <select class="catalot__select" name="sort">
        <option>По популярности</option>
        <option>От дешевых к дорогим</option>
        <option>От дорогих к дешевым</option>
      </select>
    </div>
  </div>
</div>