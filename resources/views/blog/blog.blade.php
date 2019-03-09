<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="assets/img/favicon.ico" rel="shortcut icon">
{{--     <link rel="stylesheet" type="text/css" href="css/libs.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/media.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="fonts/fonts.css"> --}}

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title>Noski</title>
  </head>
  <body>
    <div class="loader-outer">
      <div class="loader">
        <div class="ball one">
          <div class="inner"></div>
        </div>
        <div class="ball two">
          <div class="inner"></div>
        </div>
        <div class="ball three">
          <div class="inner"></div>
        </div>
        <div class="ball four">
          <div class="inner"></div>
        </div>
        <div class="ball five">
          <div class="inner"></div>
        </div>
        <div class="ball six">
          <div class="inner"></div>
        </div>
        <div class="ball center">
          <div class="inner"></div>
        </div>
      </div>
    </div>
    <nav id="menu">
      <ul class="mobile-menu">
        <li class="mobile-menu__login"><a class="mobile-menu__enter" href="#" id="mobileEnter">Войти</a><a class="mobile-menu__reg" href="#" id="mobileReg">Регистрация</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">НОВИНКИ</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">АКЦИИ</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">ХИТЫ ПРОДАЖ</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">ОЖИДАЕМЫЙ ТОВАР</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">РАСПРОДАЖА</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">О КОМПАНИИ</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">НОВОСТИ</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">КОНТАКТЫ</a></li>
      </ul>
    </nav>
    <div class="content-wrapper" id="contentWrapper">
      <div class="page-wrapper" id="pageWrapper">
        <header class="header">
          <div class="box">
            <div class="header__header-3part header__header-3part">
              <div class="header__header-soc header-soc"><a class="header-soc__item" href="#"><i class="fab fa-facebook-f"></i></a><a class="header-soc__item" href="#"><i class="fab fa-instagram"></i></a><a class="header-soc__item header-soc__item_phone" href="tel:8(800)333-28-63">8 (800) 333-28-63</a></div>
            </div>
            <div class="header__header-center header__header-3part"><a class="header__logo" href="#"><img src="/img/new-logo.png"></a></div>
            <div class="header__header-right header__header-3part">
              <div class="header__login-block login-block"><a class="login-block__links" href="#enterForm" id="enter">Войти</a><a class="login-block__links" href="#" id="reg">Регистрация</a></div>
              <div class="header__search-cart search-cart"><a class="search-cart__cart" href="#"><i class="fas fa-shopping-cart"></i></a>
                <form class="search-cart__search">
                  <input class="search-cart__input">
                  <button class="search-cart__btn"><i class="fas fa-search"></i></button>
                </form>
              </div>
            </div>
          </div>
          <div class="header__slider owl-carousel">
            <div class="header__slide" style="background-image: url(../img/Group729.jpg)">
              <div class="box">
                <div class="header__slide-title">МУЖСКИЕ НОСКИ</div>
              </div>
            </div>
            <div class="header__slide" style="background-image: url(../img/Group729.jpg)">
              <div class="box">
                <div class="header__slide-title">МУЖСКИЕ НОСКИ</div>
              </div>
            </div>
            <div class="header__slide" style="background-image: url(../img/Group729.jpg)">
              <div class="box">
                <div class="header__slide-title">МУЖСКИЕ НОСКИ</div>
              </div>
            </div>
          </div>
        </header>
        <div class="nav-outer">
          <div class="box">
            <nav class="main-nav">
              <div class="main-nav__catalog">КАТАЛОГ
                <div class="main-nav__catalog-cub"></div>
                <ul class="main-nav__submenu main-nav__submenu_general">
                  <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Мужские носки<i class="fas fa-chevron-right"></i></a>
                    <ul class="main-nav__submenu">
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                    </ul>
                  </li>
                  <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Женские носки<i class="fas fa-chevron-right"></i></a>
                    <ul class="main-nav__submenu">
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                    </ul>
                  </li>
                  <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Детские носки<i class="fas fa-chevron-right"></i></a>
                    <ul class="main-nav__submenu">
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                    </ul>
                  </li>
                  <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Леггинсы женские<i class="fas fa-chevron-right"></i></a>
                    <ul class="main-nav__submenu">
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                    </ul>
                  </li>
                  <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Мужское белье<i class="fas fa-chevron-right"></i></a>
                    <ul class="main-nav__submenu">
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                    </ul>
                  </li>
                  <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Женское белье<i class="fas fa-chevron-right"></i></a>
                    <ul class="main-nav__submenu">
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                    </ul>
                  </li>
                  <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Трикотаж<i class="fas fa-chevron-right"></i></a>
                    <ul class="main-nav__submenu">
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                      <li class="main-nav__submenu-item"><a class="main-nav__submenu-link" href="#">Какой-то пункт</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <button class="hamburger hamburger--3dy" type="button" id="mmenu-icon"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
              <ul class="main-nav__nav">
                <li class="main-nav__nav-item"><a class="main-nav__nav-link" href="#">НОВИНКИ</a></li>
                <li class="main-nav__nav-item"><a class="main-nav__nav-link" href="#">АКЦИИ</a></li>
                <li class="main-nav__nav-item"><a class="main-nav__nav-link" href="#">ХИТЫ ПРОДАЖ</a></li>
                <li class="main-nav__nav-item"><a class="main-nav__nav-link" href="#">ОЖИДАЕМЫЙ ТОВАР</a></li>
                <li class="main-nav__nav-item"><a class="main-nav__nav-link" href="#">РАСПРОДАЖА</a></li>
                <li class="main-nav__nav-item"><a class="main-nav__nav-link" href="#">О КОМПАНИИ</a></li>
                <li class="main-nav__nav-item"><a class="main-nav__nav-link" href="#">НОВОСТИ</a></li>
                <li class="main-nav__nav-item"><a class="main-nav__nav-link" href="#">КОНТАКТЫ</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="box">
          <ul class="breadcrumbs">
            <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"> Главная</a></li>
            <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"> Каталог</a></li>
            <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#">Мужчинам</a></li>
          </ul>
        </div>
        <section class="news"><a class="news__basket-link basket-link" href="#"><span class="catalog__basket-counter">15</span></a>
          <div class="box">
            <div class="news_filter">
              <div class="news__filter-title">Категории</div>
              <div class="news__drop-title">Для мужчин</div>
              <ul class="news__drop-content">
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Носки</a></li>
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Белье</a></li>
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Леггинсы</a></li>
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Трикотаж</a></li>
              </ul>
              <div class="news__drop-title">Для Женщин</div>
              <ul class="news__drop-content">
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Носки</a></li>
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Белье</a></li>
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Леггинсы</a></li>
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Трикотаж</a></li>
              </ul>
              <div class="news__drop-title">Для детей</div>
              <ul class="news__drop-content">
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Носки</a></li>
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Белье</a></li>
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Леггинсы</a></li>
                <li class="news__drop-content-item"><a class="news__drop-content-link" href="#">Трикотаж</a></li>
              </ul>
            </div>

            @if ($news->count())

            <div class="news__block news-block">
              <div class="news-block__title">НОВОСТИ</div>

              @foreach($news as $n)
            
                <div class="news-block__item news-item">
                  <div class="news-item__img"><img src="{{ $n->img }}"></div>
                  <div class="news-item__date">{{ $n->created_at }}</div>
                    <a class="news-item__title" href="#">{{ $n->title }}</a>
                  <div class="news-item__note">{{ Str::limit($n->content, 100) }}</div>
                </div>

              @endforeach

            @endif
              {{-- <div class="news-block__item news-item">
                <div class="news-item__img"><img src="/img/news.jpg"></div>
                <div class="news-item__date">13 августа 2018</div><a class="news-item__title" href="#">Теперь в нашем магазине представлен новый бренд детских носков Unswear</a>
                <div class="news-item__note">Интернет-магазин носков и аксессуаров от признанных брендов мирового масштаба.</div>
              </div>
              <div class="news-block__item news-item">
                <div class="news-item__img"><img src="/img/news.jpg"></div>
                <div class="news-item__date">13 августа 2018</div><a class="news-item__title" href="#">Теперь в нашем магазине представлен новый бренд детских носков Unswear</a>
                <div class="news-item__note">Интернет-магазин носков и аксессуаров от признанных брендов мирового масштаба.</div>
              </div>
              <div class="news-block__item news-item">
                <div class="news-item__img"><img src="/img/news.jpg"></div>
                <div class="news-item__date">13 августа 2018</div><a class="news-item__title" href="#">Теперь в нашем магазине представлен новый бренд детских носков Unswear</a>
                <div class="news-item__note">Интернет-магазин носков и аксессуаров от признанных брендов мирового масштаба.</div>
              </div>
              <div class="news-block__item news-item">
                <div class="news-item__img"><img src="/img/news.jpg"></div>
                <div class="news-item__date">13 августа 2018</div><a class="news-item__title" href="#">Теперь в нашем магазине представлен новый бренд детских носков Unswear</a>
                <div class="news-item__note">Интернет-магазин носков и аксессуаров от признанных брендов мирового масштаба.</div>
              </div>
              <div class="news-block__item news-item">
                <div class="news-item__img"><img src="/img/news.jpg"></div>
                <div class="news-item__date">13 августа 2018</div><a class="news-item__title" href="#">Теперь в нашем магазине представлен новый бренд детских носков Unswear</a>
                <div class="news-item__note">Интернет-магазин носков и аксессуаров от признанных брендов мирового масштаба.</div>
              </div>
              <div class="news-block__item news-item">
                <div class="news-item__img"><img src="/img/news.jpg"></div>
                <div class="news-item__date">13 августа 2018</div><a class="news-item__title" href="#">Теперь в нашем магазине представлен новый бренд детских носков Unswear</a>
                <div class="news-item__note">Интернет-магазин носков и аксессуаров от признанных брендов мирового масштаба.</div>
              </div>
              <div class="news-block__item news-item">
                <div class="news-item__img"><img src="/img/news.jpg"></div>
                <div class="news-item__date">13 августа 2018</div><a class="news-item__title" href="#">Теперь в нашем магазине представлен новый бренд детских носков Unswear</a>
                <div class="news-item__note">Интернет-магазин носков и аксессуаров от признанных брендов мирового масштаба.</div>
              </div>
              <div class="news-block__item news-item">
                <div class="news-item__img"><img src="/img/news.jpg"></div>
                <div class="news-item__date">13 августа 2018</div><a class="news-item__title" href="#">Теперь в нашем магазине представлен новый бренд детских носков Unswear</a>
                <div class="news-item__note">Интернет-магазин носков и аксессуаров от признанных брендов мирового масштаба.</div>
              </div> --}}
            </div>
          </div>
          <div class="main-desc">
            <div class="box">
              <div class="main-desc__title"> МУЖСКИЕ НОСКИ</div>
              <div class="main-desc__text">НОСКИ- интернет-магазин носков и аксессуаров от признанных брендов мирового масштаба. В нашем ассортименте представлен большой перечень наименований, поэтому каждый сможет найти для себя что-то особенное. Hype - это исключительно оригинальные кроссовки с последних коллекций и культовые модели, ставшие классикой. Среди представленных брендов есть: Saucony, Asics, Reebok, Nike, Adidas, Puma, Vans.Наша команда - это молодые специалисты, с отличным чувством вкуса, которые непрерывно мониторят рынок и пополняют ассортимент лучшими позициями. Ведь причиной создания магазина стало стремление предложить покупателям лучшее из мира спорта и streetwear. Каждый сотрудник обладает обширным багажом знаний, которые позволяют предоставить качественную консультацию.</div>
            </div>
          </div>
        </section>
      </div>
      <div class="footer-wrapper" id="footerWrapper">
        <footer><a class="footer-anchor" href="header"><i class="fas fa-chevron-up"></i></a>
          <div class="box">
            <div class="footer-col">
              <div class="footer-col__title">ЛИЧНЫЙ КАБИНЕТ</div>
              <ul class="footer-col__list">
                <li class="footer-col__list-item"><a href="#">Личный кабинет</a></li>
                <li class="footer-col__list-item"><a href="#">История заказов</a></li>
                <li class="footer-col__list-item"><a href="#">Избранные товары</a></li>
                <li class="footer-col__list-item"><a href="#">Рассылка</a></li>
              </ul>
              <div class="footer-col__title-soc">СОЦ. СЕТИ
                <div class="footer-col__soc"><a class="footer-col__soc-item" href="#"><i class="fab fa-facebook-f"></i></a><a class="footer-col__soc-item" href="#"><i class="fab fa-instagram"></i></a></div>
              </div>
            </div>
            <div class="footer-col">
              <div class="footer-col__title">КАТАЛОГ</div>
              <ul class="footer-col__list">
                <li class="footer-col__list-item"><a href="#">Носки мужские</a></li>
                <li class="footer-col__list-item"><a href="#">Носки женские</a></li>
                <li class="footer-col__list-item"><a href="#">Носки подростковые</a></li>
                <li class="footer-col__list-item"><a href="#">Носки детские</a></li>
                <li class="footer-col__list-item"><a href="#">Гольфы женские</a></li>
                <li class="footer-col__list-item"><a href="#">Одежда</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <div class="footer-col__title">ИНФОРМАЦИЯ</div>
              <ul class="footer-col__list">
                <li class="footer-col__list-item"><a href="#">Доставка</a></li>
                <li class="footer-col__list-item"><a href="#">О кампании</a></li>
                <li class="footer-col__list-item"><a href="#">Гарантия</a></li>
                <li class="footer-col__list-item"><a href="#">Контакты</a></li>
                <li class="footer-col__list-item"><a href="#">Условия сотрудничества</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <div class="footer-col__title">ДОПОЛНИТЕЛЬНО</div>
              <ul class="footer-col__list">
                <li class="footer-col__list-item"><a href="#">Новинки</a></li>
                <li class="footer-col__list-item"><a href="#">Товары оптом</a></li>
                <li class="footer-col__list-item"><a href="#">Ожидаемый товар</a></li>
                <li class="footer-col__list-item"><a href="#">Акции</a></li>
                <li class="footer-col__list-item"><a href="#">Хиты продаж</a></li>
                <li class="footer-col__list-item"><a href="#">Распродажа</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <div class="footer-col__title">ДОПОЛНИТЕЛЬНО</div>
              <ul class="footer-col__list footer-col__list-img" style="background-image: url(&quot;../img/smartphone.png&quot;)">
                <li class="footer-col__list-item"><a href="tel:8(964)645-29-61">8 (964) 645-29-61</a></li>
                <li class="footer-col__list-item"><a href="tel:8(920)369-74-38">8 (920) 369-74-38</a></li>
                <li class="footer-col__list-item"><a href="tel:8(800)333-28-63">8 (800) 333-28-63</a></li>
                <li class="footer-col__list-item"><a href="tel:8(495)008-93-38">8 (495) 008-93-38</a></li>
              </ul>
              <ul class="footer-col__list footer-col__list-img" style="background-image: url(&quot;../img/passage-of-time.png&quot;)">
                <li class="footer-col__list-item">Режим работы</li>
                <li class="footer-col__list-item">ПН-ПТ с 9-00 до 17-00 по МСК</li>
              </ul>
              <ul class="footer-col__list footer-col__list-img" style="background-image: url(&quot;../img/contact.png&quot;)">
                <li class="footer-col__list-item"><a href="mailto:info@noski37optom.ru">info@noski37optom.ru</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-logo-row"><a class="footer-logo-link" href="#"><img src="/img/new-logo.png"></a></div>
        </footer>
      </div>
    </div>
    <form class="modal-form enter-form" id="enterForm">
      <div class="modal-form__title">ВХОД</div>
      <div class="modal-form__input-row">
        <div class="modal-form__input-name">Эл. почта</div>
        <input class="modal-form__input">
      </div>
      <div class="modal-form__input-row">
        <div class="modal-form__input-name">Телефон</div>
        <input class="modal-form__input">
      </div>
      <div class="modal-form__input-row">
        <div class="modal-form__input-name">Пароль</div>
        <input class="modal-form__input">
      </div>
      <div class="modal-form__bottom-row"><a class="fogert-pass" href="#">Забыли пароль?</a>
        <div class="modal-form__enter-reg-row">
          <button class="btn" id="enterModal">Войти</button>
          <button class="btn btn_white" id="regModal">Регистрация</button>
        </div>
      </div>
    </form>
    <form class="modal-form reg-form" id="regForm">
      <div class="modal-form__title">РЕГИСТРАЦИЯ</div>
      <div class="modal-form__input-row">
        <div class="modal-form__input-name modal-form__require">Имя</div>
        <input class="modal-form__input">
      </div>
      <div class="modal-form__input-row">
        <div class="modal-form__input-name modal-form__require">Эл. почта</div>
        <input class="modal-form__input">
      </div>
      <div class="modal-form__news-spam">
        <input class="modal-form__i-agree" id="spam" type="checkbox" hidden>
        <label class="modal-form__agree-label" for="spam">Да</label>
        <div class="modal-form__agree-text">Подписаться на новости и скидки</div>
      </div>
      <div class="modal-form__input-row">
        <div class="modal-form__input-name">Моб.тел.</div>
        <input class="modal-form__input">
      </div>
      <div class="modal-form__input-row select-outer">Пол<i class="fas fa-angle-down"></i>
        <select class="modal-form__input" name="sex">
          <option>Женский</option>
          <option>Мужской</option>
        </select>
      </div>
      <div class="modal-form__input-row">
        <div class="modal-form__input-name modal-form__require">Пароль</div>
        <input class="modal-form__input">
      </div>
      <div class="modal-form__input-row">
        <div class="modal-form__input-name modal-form__require">Подтвердите<br>пароль</div>
        <input class="modal-form__input">
      </div>
      <div class="modal-form__enter-reg-row">
        <button class="btn" id="registration">Зарегестрироваться</button>
        <button class="btn btn_white" id="regEnter">Вход</button>
      </div>
    </form>
    <form class="modal-form calc-form" id="calcForm">
      <div class="calc-form__title">ТК ЭНЕРГИЯ</div>
      <div class="calc-form__inputs-block">
        <div class="calc-form__input-outer">
          <div class="calc-form__input-title">Пункт назначения отправления</div>
          <input class="calc-form__input">
        </div>
        <div class="calc-form__input-outer">
          <div class="calc-form__input-title">Вес отправления, кг:</div>
          <input class="calc-form__input">
        </div>
        <div class="calc-form__input-outer">
          <div class="calc-form__input-title">Глубина, мм:</div>
          <input class="calc-form__input">
        </div>
        <div class="calc-form__input-outer">
          <div class="calc-form__input-title">Высота, мм:</div>
          <input class="calc-form__input">
        </div>
        <div class="calc-form__input-outer">
          <div class="calc-form__input-title">Ширина, мм:</div>
          <input class="calc-form__input">
        </div>
      </div>
      <div class="calc-form__btn-row">
        <button class="btn">Отправить</button>
      </div>
    </form>
    {{-- <script src="js/libs.min.js"></script> --}}
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuWuh6Wr4Kh8l6moiEpHyHPjAhLtTSthk&amp;callback=initMap"></script>
    <script src="{{ mix('js/main.js') }}"></script>
    {{-- <script src="js/common.js"></script> --}}
  </body>
</html>