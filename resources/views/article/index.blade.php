@extends('layouts.main')


@section('content')
  @include('components.preloader')
  @include('components.mobile-menu')

    <div class="content-wrapper" id="contentWrapper">
      <div class="page-wrapper" id="pageWrapper">

        @include('components.common-header')
        @include('components.common-nav')
        
        {{-- @include('components.breadcrumbs') --}}
        {{ Breadcrumbs::render('article', $article) }}
        
        <section class="news single-news">

          @include('components.fixed-busket')
          
          <div class="box single-news__box">
            
            @include('blog.filters')

            <div class="news__block news-block">
              <div class="news-block__title">НОВОСТИ</div>
              
              @include('article.content')

              @include('article.tabs')

            </div>
          </div>
          <div class="box">
            <a class="single-news__all-news" href="{{ route('blog') }}"><i class="fas fa-angle-left"></i>Все новости</a>
          </div>
        </section>

        @include('blog.description')
      
      </div>
      
      @include('components.footer')
    
    </div>

    @include('components.forms.calculate');    
    @include('components.forms.enter');    
    @include('components.forms.register');  

@endsection