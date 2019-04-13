@extends('layouts.static_pages')



@section('static_content')

    <section class="contacts">
      <div class="box">
        <div class="contacts__title">КОНТАКТЫ</div>
        <div class="contacts__map googleMaps" data-location="Россия, Иваново, улица Поляковой, д. 6"></div>
        <div class="contacts__block">
          <div class="contacts__info">
            <div class="contacts__sub-title">НАШ МАГАЗИН</div>
            <ul class="contacts__info-list">
              <li class="contacts__info-item"><span>Адрес:</span>Россия, Иваново, улица Поляковой, д. 6
              </li>
              <li class="contacts__info-item"><span>Телефон:</span>8 (800) 333-28-63
              </li>
              <li class="contacts__info-item"><span>E-Mail:</span>info@noski37optom.ru
              </li>
              <li class="contacts__info-item"><span>График работы:</span>пн-пт с 9:00 до 17:00
              </li>
            </ul>
            <ul class="contacts__soc-list">
              <li class="contacts__soc-item"><a class="contacts__soc-link" style="background-image: url('img/instaram.png')"></a><a class="contacts__soc-link" style="background-image: url('img/instaram.png')"></a></li>
            </ul>
          </div>
          <form class="contacts__form">
            <div class="contacts__sub-title">Обратная связь</div>
            <div class="contacts__input-outer">
              <div class="contacts__input-title">Ваше имя</div>
              <input class="contacts__input">
            </div>
            <div class="contacts__input-outer">
              <div class="contacts__input-title">Ваш E-mail*</div>
              <input class="contacts__input">
            </div>
            <div class="contacts__input-outer">
              <div class="contacts__input-title">Сообщение*</div>
              <textarea class="contacts__input contacts__textarea"></textarea>
            </div>
            <button class="btn">Отправить</button>
          </form>
        </div>
      </div>
    </section>



@endsection  