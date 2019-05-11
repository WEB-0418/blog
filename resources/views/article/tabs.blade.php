<div class="single-news__tabs news-tabs">
  <ul class="news-tabs__list">
    <li class="news-tabs__list-item"><a class="news-tabs__list-link" href="#tab-1">НОВЫЕ МАТЕРИАЛЫ</a></li>
    <li class="news-tabs__list-item"><a class="news-tabs__list-link" href="#tab-2">ПОПУЛЯРНЫЕ</a></li>
  </ul>
  <div class="news-tabs__tab" id="tab-1">
    <div class="news-tabs__tab-inner">
      
      @foreach($latestNews as $latestArticle)
      
        <a class="news-block__item news-item" href="{{ route('article', ['slug' => $latestArticle->slug]) }}">
          <div class="news-item__img"><img src="{{ strpos($latestArticle->img, 'http') === 0 ? $latestArticle->img : "/storage/" . $latestArticle->img }}" alt="{{ $latestArticle->title }}"></div>
          <div class="news-item__date">{{ $latestArticle->date ?? '' }}</div>
          <div class="news-item__title">{{ $latestArticle->title }}</div>
          <div class="news-item__note">{!! $latestArticle->content !!}</div>
        </a>

      @endforeach

    </div>
  </div>
  <div class="news-tabs__tab" id="tab-2">
    <div class="news-tabs__tab-inner">
      @foreach($popularNews as $popularArticle)
      
        <a class="news-block__item news-item" href="{{ route('article', ['slug' => $popularArticle->slug]) }}">
          <div class="news-item__img"><img src="{{ strpos($popularArticle->img, 'http') === 0 ? $popularArticle->img : "/storage/" . $popularArticle->img }}" alt="{{ $popularArticle->title }}"></div>
          <div class="news-item__date">{{ $popularArticle->date ?? '' }}</div>
          <div class="news-item__title">{{ $popularArticle->title }}</div>
          <div class="news-item__note">{!! $popularArticle->content !!}</div>
        </a>

      @endforeach

    </div>

{{--     <a class="anews-block__item news-item" href="#">
        <div class="news-item__img"><img src="img/news.jpg"></div>
        <div class="news-item__date">13 августа 2018</div>
        <div class="news-item__title">Теперь в нашем магазине представлен новый бренд детских носков Unswear</div>
        <div class="news-item__note">Интернет-магазин носков и аксессуаров от признанных брендов мирового масштаба.</div></a><a class="anews-block__item news-item" href="#">
        <div class="news-item__img"><img src="img/news.jpg"></div>
        <div class="news-item__date">13 августа 2018</div>
        <div class="news-item__title">Теперь в нашем магазине представлен новый бренд детских носков Unswear</div>
        <div class="news-item__note">Интернет-магазин носков и аксессуаров от признанных брендов мирового масштаба.</div></a>
    </div> --}}
  </div>
</div>