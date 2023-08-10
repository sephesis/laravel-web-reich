@extends('layouts.app')
@section('content')
<div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
      <li class="breadcrumbs__item">   <a class="breadcrumbs__link" href="{{route('article.list')}}">Посты</a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">Как создать член в Фигме, чтобы вызвать зависть </li>
    </ul>
    <div class="col-lg-8 col-sm-12">
      <h1 class="h1 h1_small">{{ $article->title}}</h1>
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
    <div class="col-lg-4 col-sm-12">
      <div class="similar"> 
        <div class="similar__title">Похожие статьи <span class="similar__counter">{{ '(' . count($others) . ')' }}</span></div>
        <ul class="similar__list">
        @foreach ($others as $otherArticle)
        <li class="similar__item">
          <a href="{{ route('article.view', ['slug' => $otherArticle->slug ])}}">{{ $otherArticle->title}}<br></a>
          <span class="simipar__date">{{$otherArticle->formattedDateCreated}}</span></li>
        @endforeach
        </ul>
      </div>
    </div>
    @endif
  </div>
@endsection