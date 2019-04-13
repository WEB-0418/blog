@if ($news->count())

  <div class="news__block news-block">
    <div class="news-block__title">{{ $page_title }}</div>

    @foreach($news as $n)

      <div class="news-block__item news-item">
        <div class="news-item__img"><img src="{{ $n->img }}"></div>
        <div class="news-item__date">{{ $n->date }}</div>
          <a class="news-item__title" href="{{ route('article', ['slug' => $n->slug]) }}">{{ $n->title }}</a>
        <div class="news-item__note">{{ Str::limit($n->content, 100) }}</div>
      </div>

    @endforeach

  </div>

@endif
