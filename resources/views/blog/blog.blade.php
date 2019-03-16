@extends('layouts.main')


@section('content')
  @include('components.preloader')
  @include('components.mobile-menu')

    <div class="content-wrapper" id="contentWrapper">
      <div class="page-wrapper" id="pageWrapper">

        @include('components.common-header')
        @include('components.common-nav')
        
        @include('components.breadcrumbs')

        <section class="news">

          @include('components.fixed-busket')

          <div class="box">

            @include('blog.filters')
            @include('blog.news')

          </div>

          @include('blog.description')

        </section>
      </div>

      @include('components.footer')

    </div>

    @include('components.forms.calculate');    
    @include('components.forms.enter');    
    @include('components.forms.register');    

@endsection