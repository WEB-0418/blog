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
        

        <section class="tovar-card">
          <div class="box">
            <div class="tovar-block">
              <div class="tovar-block__sides">
                <div class="tovar-block__left">
                  <div class="tovar-block__main-slider owl-carousel">
                    <div class="tovar-block__main-slide">
                      <button class="tovar-block__favorite"></button><img src="img/big_sock.png">
                    </div>
                    <div class="tovar-block__main-slide">
                      <button class="tovar-block__favorite"></button><img src="img/big_sock.png">
                    </div>
                    <div class="tovar-block__main-slide">
                      <button class="tovar-block__favorite"></button><img src="img/big_sock.png">
                    </div>
                    <div class="tovar-block__main-slide">
                      <button class="tovar-block__favorite"></button><img src="img/big_sock.png">
                    </div>
                    <div class="tovar-block__main-slide">
                      <button class="tovar-block__favorite"></button><img src="img/big_sock.png">
                    </div>
                  </div>
                  <div class="tovar-block__nav-slider owl-carousel">
                    <div class="tovar-block__nav-slide">
                      <div class="tovar-block__nav-slide-inner"><img src="img/snickers-workwear-flexiwork-camo-noski-2-pary.png"></div>
                    </div>
                    <div class="tovar-block__nav-slide">
                      <div class="tovar-block__nav-slide-inner"><img src="img/snickers-workwear-flexiwork-camo-noski-2-pary.png"></div>
                    </div>
                    <div class="tovar-block__nav-slide">
                      <div class="tovar-block__nav-slide-inner"><img src="img/snickers-workwear-flexiwork-camo-noski-2-pary.png"></div>
                    </div>
                    <div class="tovar-block__nav-slide">
                      <div class="tovar-block__nav-slide-inner"><img src="img/snickers-workwear-flexiwork-camo-noski-2-pary.png"></div>
                    </div>
                    <div class="tovar-block__nav-slide">
                      <div class="tovar-block__nav-slide-inner"><img src="img/snickers-workwear-flexiwork-camo-noski-2-pary.png"></div>
                    </div>
                  </div>
                </div>
                <div class="tovar-block__right">
                  <div class="tovar-block__title">НОСКИ МУЖСКИЕ КОРОТКИЕ « Divi »</div>
                  <div class="tovar-block__article">Артикул:  № 478-C3051</div>
                  <div class="tovar-block__review-row">
                    <div class="tovar-block__review-counter">4 отзыва / Добавить отзыв</div>
                    <!--Для товара котого нет в наличии класс .tovar-block__tovar-status_not-available-->
                    <div class="tovar-block__tovar-status tovar-block__tovar-status_available">Доступность:</div>
                  </div>
                  <div class="tovar-block_price">150 руб.</div>
                  <form class="tovar-block__form">
                    <div class="tovar-block__select-outer">
                      <div class="tovar-block__select-title">Цвет</div>
                      <input class="tovar-block__color" type="text" hidden>
                      <div class="tovar-block__proxy-select"><i class="fas fa-angle-down"></i>
                        <ul class="tovar-block__color-select">
                          <li class="tovar-block__color-item tovar-block__color-item_active ">
                            <div class="tovar-block__color-item-inner" data-color="Красный">Красный<span class="tovar-block__color-rectangle" style="background-color: #ff0000"></span></div>
                          </li>
                          <li class="tovar-block__color-item">
                            <div class="tovar-block__color-item-inner" data-color="Зеленый">Зеленый<span class="tovar-block__color-rectangle" style="background-color: #00ff00"></span></div>
                          </li>
                          <li class="tovar-block__color-item">
                            <div class="tovar-block__color-item-inner" data-color="Черный">Черный<span class="tovar-block__color-rectangle" style="background-color: #000000"></span></div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="tovar-block__select-outer">
                      <div class="tovar-block__select-title">Размер</div><i class="fas fa-angle-down"></i>
                      <select class="tovar-block__size">
                        <option>39</option>
                        <option>41</option>
                      </select>
                    </div>
                    <button class="btn tovar-block__add-to-cart">Добавить в корзину</button>
                    <ul class="tovar-block__props">
                      <li class="tovar-block__prop"><span>Бренд:</span>Divi</li>
                      <li class="tovar-block__prop"><span>Сезон:</span>Мульти</li>
                      <li class="tovar-block__prop"><span>Материал:</span>Лайкра</li>
                      <li class="tovar-block__prop"><span>Страна-производитель:</span>Китай</li>
                      <li class="tovar-block__prop"><span>Описание:</span>Hype - это исключительно оригинальные кроссовки с последних коллекций и культовые модели, ставшие классикой. Среди представленных брендов есть: Saucony, Asics, Reebok, Nike, Adidas, Puma, Vans.</li>
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

    @include('components.forms.calculate');    
    @include('components.forms.enter');    
    @include('components.forms.register');    


@endsection
