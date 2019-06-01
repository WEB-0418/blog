@extends ('layouts.main')


@section('content')

    <div class="content-wrapper" id="contentWrapper">
      <div class="page-wrapper" id="pageWrapper">
        
        @include ('components.common-header')
		@include ('components.common-nav')

        {{ Breadcrumbs::render('product', $product) }}
        
        <section class="basket">
          <div class="box">
            <form class="basket__form" action="">
              <div class="basket__inputs-block">
                <div class="basket__inputs-col">
                  <div class="basket__input-row">
                    <div class="basket__input-name-outer">
                      <div class="basket__input-name basket__require">Имя</div>
                    </div>
                    <input class="basket__input">
                  </div>
                  <div class="basket__input-row">
                    <div class="basket__input-name-outer">
                      <div class="basket__input-name basket__require">Эл почта</div>
                    </div>
                    <input class="basket__input">
                  </div>
                  <div class="basket__input-row">
                    <div class="basket__input-name-outer">
                      <div class="basket__input-name basket__require">Телефон</div>
                    </div>
                    <input class="basket__input">
                  </div>
                  <div class="basket__input-row">
                    <div class="basket__input-name-outer">
                      <div class="basket__input-name basket__require">Город</div>
                    </div>
                    <input class="basket__input">
                  </div>
                  <div class="basket__input-row">
                    <div class="basket__input-name-outer">
                      <div class="basket__input-name basket__require">Адрес доставки</div>
                    </div>
                    <textarea class="basket__input basket__textarea"></textarea>
                  </div>
                </div>
                <div class="basket__inputs-col">
                  <div class="basket__input-row">
                    <div class="basket__input-name-outer">
                      <div class="basket__input-name basket__require">Фамилия</div>
                    </div>
                    <input class="basket__input">
                  </div>
                  <div class="basket__input-row">
                    <div class="basket__input-name-outer">
                      <div class="basket__input-name basket__require">Имя</div>
                    </div>
                    <input class="basket__input">
                  </div>
                  <div class="basket__input-row">
                    <div class="basket__input-name-outer">
                      <div class="basket__input-name basket__require">Отчество</div>
                    </div>
                    <input class="basket__input">
                  </div>
                  <div class="basket__input-row">
                    <div class="basket__input-name-outer">
                      <div class="basket__input-name basket__require">Дата рождения</div>
                    </div>
                    <input class="basket__input">
                  </div>
                  <div class="basket__input-row">
                    <div class="basket__input-name-outer">
                      <div class="basket__input-name basket__require">Номер/серия паспорта</div>
                    </div>
                    <input class="basket__input">
                  </div>
                </div>
                <textarea class="basket__comment" placeholder="Комментарий к заказу"></textarea>
              </div>
              <div class="basket__checkbox-block">
                <div class="basket__checkbox-col">
                  <ul class="basket__pay-way">
                    <li class="basket__pay-way-opt">
                      <input class="basket__pay-way-input" id="yandex" type="radio" name="pay-way" hidden>
                      <label class="basket__pay-way-label" for="yandex">Яндекс Деньги</label>
                    </li>
                    <li class="basket__pay-way-opt">
                      <input class="basket__pay-way-input" id="cards" type="radio" name="pay-way" hidden>
                      <label class="basket__pay-way-label" for="cards">Банковские карты</label>
                    </li>
                    <li class="basket__pay-way-opt">
                      <input class="basket__pay-way-input" id="terms" type="radio" name="pay-way" hidden>
                      <label class="basket__pay-way-label" for="terms">Терминалы</label>
                    </li>
                    <li class="basket__pay-way-opt">
                      <input class="basket__pay-way-input" id="cash" type="radio" name="pay-way" hidden>
                      <label class="basket__pay-way-label" for="cash">Наличные курьеру</label>
                    </li>
                    <li class="basket__pay-way-opt">
                      <input class="basket__pay-way-input" id="bank" type="radio" name="pay-way" hidden>
                      <label class="basket__pay-way-label" for="bank">Сбербанк</label>
                    </li>
                  </ul>
                </div>
                <div class="basket__checkbox-col">
                  <div class="basket__delivery-way-inner">
                    <div class="basket__pay-way-opt">
                      <input class="basket__pay-way-input" id="yourself" type="radio" name="delivery-way" hidden data-delCost="0">
                      <label class="basket__pay-way-label" for="yourself">Самовывоз</label>
                    </div>
                    <div class="basket__delivery-type">
                      <div class="basket__delivery-price">Стоимость: 0 руб.</div>
                      <div class="basket__delivery-desc">Вы можете самостоятельно забрать заказ из нашего магазина.</div>
                    </div>
                  </div>
                </div>
                <div class="basket__checkbox-col basket__delivery-way">
                  <div class="basket__delivery-way-inner">
                    <div class="basket__pay-way-opt">
                      <input class="basket__pay-way-input" id="courier" type="radio" checked name="delivery-way" data-delCost="500" hidden>
                      <label class="basket__pay-way-label" for="courier">Доставка курьером</label>
                    </div>
                    <div class="basket__delivery-type">
                      <div class="basket__delivery-price">Стоимость: 500 руб.</div>
                      <div class="basket__delivery-desc">Доставка осуществляется в течение дня в удобное для вас время.</div>
                    </div>
                    {{-- <button class="basket__del-calc">Рассчитать доставку</button> --}}
                  </div>
                </div>
              </div>
              <div class="basket_tovars" id="products">
                {{-- todo: insert products with js --}}
              </div>
              <div class="basket__super-total">
                <button class="btn basket__checkout" id="createOrder">Оформить заказ</button>
                <ul class="basket__super-total-list">
                  <li class="basket__super-total-item">Доставка:
                    <input id="delTotal" readonly>
                  </li>
                  <li class="basket__super-total-item">Стоимость товара:
                    <input id="goodsTotal" readonly>
                  </li>
                  <li class="basket__super-total-item">Итого:
                    <input id="superTotal" readonly>
                  </li>
                </ul>
              </div>
              <a class="basket__to-catalog" href="{{ route('catalog') }}"><i class="fas fa-angle-left"></i>Вернуться в в каталог</a>
            </form>
          </div>
        </section>
      </div>


      @include ('components.footer')
    </div>

    @include('components.forms.calculate')
    @include('components.forms.enter')
    @include('components.forms.register')

@endsection