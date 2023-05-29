@extends('layouts.app')

@section('title') {{ $pageTitle }} |
@endsection
@section('content')
    <div class="row">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
            <li class="breadcrumbs__item breadcrumbs__item-active">Контакты</li>
        </ul>
        <div class="col-lg-4">
            <h1 class="h1">{{ $pageTitle }}</h1>
        </div>
        <div class="col-lg-8 align-self-center">
            <ul class="selection">
                <li class="selection__item"><a class="selection__link active" href="#">Все проекты</a></li>
                <li class="selection__item"><a class="selection__link" href="#">Дизайн</a></li>
                <li class="selection__item"><a class="selection__link" href="#">Программирование</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        {{-- <div class="col-lg-4 mt-4">
            <div class="project_divider"></div>
        </div> --}}
        @foreach ($projects as $k => $project)

         @if ($k === 0 || $k === 4)
         <div class="col-lg-4 mt-4">
          <div class="project_divider"></div>
          </div>
         @endif 
        <div class="col-lg-4 mt-4">
          {{-- @php
          $k--;
            echo $k;
          @endphp --}}
          <a class="project" href="" style="background: url('/img/proj_1.svg');">
                <div class="project__top">
                    <div class="project__symbol project__symbol_pink">А</div>
                    <div class="project__date">12.12.2012</div>
                </div>
                <div class="project__main">
                    <div class="project__tag">Дизайн</div>
                    <div class="project__hr project__hr_pink"></div>
                    <div class="project__name">Креативное агентство Accent</div>
                </div>
                <div class="project__bottom">
                    <div class="project__info">accent.moscow</div>
                </div>
            </a></div>
        @endforeach
      
    </div>
@endsection
