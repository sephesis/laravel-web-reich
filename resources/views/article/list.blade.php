@extends('layouts.app')

@section('content')
<div class="row">
  <ul class="breadcrumbs">
    <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
    <li class="breadcrumbs__item breadcrumbs__item-active">Статьи</li>
  </ul>
  <div class="col-lg-4">
    <h1 class="h1"> {{ $pageTitle }}</h1>
  </div>
</div>
<div class="row"> 
   @foreach ($articles as $article)
    <div class="col-lg-3 col-sm-6 mt-5">
      <div class="post__card card"><a class="post__card-link" href="{{route('article.view', ['slug' => $article->slug ])}}"> 
        @if ($article->img)
        <img class="img-fluid" src="{{ asset('storage/' . $article->img) }}"/>
        @else
        <img class="img-fluid" src="{{ asset('site/img/post1.png') }}"/>
        @endif
      
          <div class="post__card-date">{{ $article->formattedDateCreated }}</div>
          <div class="post__card-title">{{ $article->title }}</div></a></div>
    </div>
    @endforeach
  </div>
  <div class="row mt-5 d-flex justify-content-center">
    <div class="col-lg-4">
      {{-- <ul class="pagination"> --}}
        {{ $articles->links()}}
        {{-- @foreach ($articles->links() as $link)
     
        @endforeach --}}
        {{-- <li class="pagination__item"> <a class="pagination__item-link">
          <img class="pagination__arrow" src="{{ asset('site/img/arrow_right.svg') }}"/></a></li>
        <li class="pagination__item"> <a class="pagination__item-link">1</a></li>
        <li class="pagination__item"><a class="pagination__item-link">2</a></li>
        <li class="pagination__item"><a class="pagination__item-link">3</a></li>
        <li class="pagination__item"><a class="pagination__item-link">4</a></li>
        <li class="pagination__item"> <a class="pagination__item-link">5</a></li>
        <li class="pagination__item"> <a class="pagination__item-link">
          <img class="pagination__arrow" src="{{ asset('site/img/arrow_left.svg') }}"/></a></li> --}}
      {{-- </ul> --}}
    </div>
  </div>
@endsection