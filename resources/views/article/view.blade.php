@extends('layouts.app')
@section('content')
<div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
      <li class="breadcrumbs__item">   <a class="breadcrumbs__link" href="{{route('article.list')}}">Посты</a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">Как создать член в Фигме, чтобы вызвать зависть </li>
    </ul>
    <div class="col-lg-9">
      <h1 class="h1">{{ $article->title}}</h1>
      <span class="post__card-date">{{ $article->formattedDateCreated}}</span>
      <hr class="hr"/>
      <div class="post__text">
        @if ($article->img)
        <img class="post__img" src="{{ asset('storage/' . $article->img) }}"/>
        @else
        <img class="post__image" src="{{ asset('site/img/post1.png') }}"/>
        @endif
      <p> {{strip_tags($article->description)}} </p>
      </div>
      <div class="post__options d-flex  justify-content-between">
        <div class="post__counter">Просмотров: {{ $article->views}}</div>
        <div class="post__share"><a class="post__share-link">Поделиться</a></div>
      </div>
    </div>
    @if ($others)
    <div class="col-lg-3">
      <div class="post__wrapper">
        <div class="header__pretext header__pretext-small">#our&nbsp;features</div>
        <h2 class="h2">Похожее</h2>
        @foreach ($others as $otherArticle)
            <div class="post__card card mt-3 post__card-min">
                <a class="post__card-link" target="_blank" href="{{ route('article.view', ['slug' => $otherArticle->slug ])}}"> 
                    @if ($article->img)
                    <img class="img-fluid" src="{{ asset('storage/' . $otherArticle->img) }}"/>
                    @else
                    <img class="img-fluid" src="{{ asset('site/img/post1.png') }}"/>
                    @endif
            <div class="post__card-date">{{ $otherArticle->formattedDateCreated}}</div>
            <div class="post__card-title">{{ $otherArticle->title}}</div></a>
        </div>
        @endforeach
      </div>
    </div>
    @endif
  </div>
@endsection