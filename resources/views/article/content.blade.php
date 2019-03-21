<div class="news-block__subtitle">{{ $article->title }}</div>
<div class="news-block__item news-item single-news__item">
	<div class="news-item__img"><img src="{{ $article->img }}"></div>
    <div class="news-item__date">{{ $date }}</div>
    <div class="news-item__note">{{ $article->content }}</div>
</div>
