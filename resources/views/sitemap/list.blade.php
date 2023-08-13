@extends('layouts.app')

@section('content')
<div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">Карта сайта</li>
    </ul>
    <div class="col-lg-12">
      <h1 class="h1">{{ $pageTitle }}</h1>
      <div class="row mt-5">
        <div class="col-lg-12"></div>
        <ul>
          <li><a target="_blank" href="/">Главная</a></li>
          <li> <a target="_blank" href="{{ route('project.list') }}">Проекты</a></li>
          <li> <a target="_blank" href="{{ route('article.list') }}">Статьи</a></li>
          <li><a target="_blank" href="{{ route('calculator.index') }}">Калькулятор</a></li>
          <li> <a target="_blank" href="{{ route('solution.list') }}">Услуги</a></li>
          <li> <a target="_blank" href="{{ route('contact.view') }}">Контакты</a></li>
        </ul>
      </div>
    </div>
  </div>
@endsection