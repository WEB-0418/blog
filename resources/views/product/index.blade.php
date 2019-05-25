@extends ('layouts.main')

@section('content')

    <div class="content-wrapper" id="contentWrapper">
      <div class="page-wrapper" id="pageWrapper">
		
		@include ('components.common-header')
		@include ('components.common-nav')
        
    {{ Breadcrumbs::render('product', $product) }}        

        <section class="tovar-card">
          <div class="box">
            <div class="tovar-block">
              <div class="tovar-block__sides">
                <div class="tovar-block__left">
                  <div class="tovar-block__main-slider owl-carousel">
                    
                    @foreach($product->images as $img)

                      <div class="tovar-block__main-slide">
                        <button class="tovar-block__favorite"></button><img src="{{ $img->path }}">
                      </div>

                    @endforeach
                    
                  </div>
                  <div class="tovar-block__nav-slider owl-carousel">
                    
                    @foreach($product->images as $img)

                      <div class="tovar-block__nav-slide">
                        <div class="tovar-block__nav-slide-inner"><img src="{{ $img->path }}"></div>
                      </div>

                    @endforeach

                  </div>
                </div>
                <div class="tovar-block__right">
                  <div class="tovar-block__title">{{ $product->name }}</div>
                  <div class="tovar-block__article">Артикул:  № {{ $product->articule }}</div>
                  <div class="tovar-block__review-row">
                    <div class="tovar-block__review-counter">4 отзыва / Добавить отзыв</div>
                    <!--Для товара котого нет в наличии класс .tovar-block__tovar-status_not-available-->
                    <div 
                      class="tovar-block__tovar-status 
                          {{ $product->is_present ? 'tovar-block__tovar-status_available' : 'tovar-block__tovar-status_not-available'}}">
                      Доступность:
                    </div>
                  </div>
                  <div class="tovar-block_price">{{ $product->price }} руб.</div>
                  <form class="tovar-block__form">
                    <div class="tovar-block__select-outer">
                      <div class="tovar-block__select-title">Цвет</div>
                      <input class="tovar-block__color" type="text" hidden>
                      <div class="tovar-block__proxy-select">
                        <i class="fas fa-angle-down"></i>
                        <ul class="tovar-block__color-select">
                          
                          @foreach($colors as $color)

                            <li class="tovar-block__color-item 
                              {{ $product->color->id === $color->id ? 'tovar-block__color-item_active' : '' }}
                              ">
                              <div class="tovar-block__color-item-inner" data-color="{{ $color->name }}">
                                {{ $color->name }}<span class="tovar-block__color-rectangle" style="background-color: {{ $color->hex }}"></span>
                              </div>
                            </li>
                            
                          @endforeach

                        </ul>
                      </div>
                    </div>
                    <div class="tovar-block__select-outer">
                      <div class="tovar-block__select-title">Размер</div><i class="fas fa-angle-down"></i>
                      <select class="tovar-block__size">
                        
                        @foreach($sizes as $size)
                          <option value="{{ $size }}">{{ $size }}</option>
                        @endforeach

                      </select>
                    </div>
                    <button class="btn tovar-block__add-to-cart">Добавить в корзину</button>
                    <ul class="tovar-block__props">
                      <li class="tovar-block__prop"><span>Бренд:</span>{{ $product->brand->name }}</li>
                      <li class="tovar-block__prop"><span>Сезон:</span>{{ $product->season->name }}</li>
                      <li class="tovar-block__prop"><span>Материал:</span>{{ $product->material->name }}</li>
                      <li class="tovar-block__prop"><span>Страна-производитель:</span>{{ $product->producer->name }}</li>
                      <li class="tovar-block__prop"><span>Описание:</span>{{ $product->description }}</li>
                    </ul>
                  </form>
                </div>
              </div>
              <div class="tovar-block__rec-rew">
                
                @include ('product.recommendations')
				@include ('product.review')

              </div>
              
				@include ('product.history')

            </div>
          </div>

          @include ('product.description')

        </section>
      </div>
      
		@include ('components.footer')

    </div>	

    @include('components.forms.calculate')  
    @include('components.forms.enter') 
    @include('components.forms.register')


@endsection
