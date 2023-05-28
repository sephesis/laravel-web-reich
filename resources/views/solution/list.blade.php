@extends('layouts.app')

@section('content')
<div class="row">
        <ul class="breadcrumbs">
          <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
          <li class="breadcrumbs__item breadcrumbs__item-active">Услуги</li>
        </ul>
        <div class="col-lg-12">
          @if ($pageTitle !== '')
          <h1 class="h1">{{ $pageTitle }}</h1>
          @endif
        </div>
      </div>
      <div class="row mt-5">
        @foreach ($solutions as $k => $solution)
        <div class="col-lg-4">
          <div class="service__card card">
            <img class="service__icon" src="{{ asset('storage/' . $solution->img) }}" alt=""/>
            <div class="service__card-number">0{{$k + 1}}</div>
            <div class="service__card-title">{{ $solution->title }}</div>
          </div>
        </div>
        @endforeach
      </div>
@endsection