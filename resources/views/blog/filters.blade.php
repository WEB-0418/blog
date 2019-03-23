<div class="news_filter">
  <div class="news__filter-title">Категории</div>
  {{-- <div class="news__drop-title">Для мужчин</div> --}}
  <ul class="news__drop-content" style="display: block;">
    @foreach ($categories as $cat)
      <li class="news__drop-content-item">
        <a class="news__drop-content-link" href="{{ route('blog-category', ['slug' => $cat->slug]) }}">
          {{ $cat->name }} 
        </a>  
      </li>
    @endforeach
  </ul>
{{--   <div class="news__drop-title">Для Женщин</div>
  <ul class="news__drop-content">
    @foreach ($categories as $cat)
      <li class="news__drop-content-item">
        <a class="news__drop-content-link" href="{{ route('blog-category', ['slug' => $cat->slug]) }}">
          {{ $cat->name }} 
        </a>  
      </li>
    @endforeach
  </ul>
  <div class="news__drop-title">Для детей</div>
  <ul class="news__drop-content">
    @foreach ($categories as $cat)
      <li class="news__drop-content-item">
        <a class="news__drop-content-link" href="{{ route('blog-category', ['slug' => $cat->slug]) }}">
          {{ $cat->name }} 
        </a>  
      </li>
    @endforeach
  </ul> --}}
</div>