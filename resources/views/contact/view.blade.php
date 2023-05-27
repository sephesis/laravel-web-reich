@extends('layouts.app')

@section('content')

<div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">Контакты</li>
    </ul>
    <div class="col-lg-6">
      <h1 class="h1">Контакты</h1>
      <div class="contacts">
        <div class="contacts__item-group">
          <div class="contacts__item"><span class="contacts__item-title">Email:</span>
            <p class="contacts__item-content"><a class="contacts__item-link" href="mailto:info@webreych.com">info@webreych.com</a></p>
          </div>
          <div class="contacts__item"><span class="contacts__item-title">Телефон:</span>
            <p class="contacts__item-content"> <a class="contacts__item-link" href="tel:89260924300">8 926 092 43 00</a></p>
          </div>
        </div>
        <div class="contacts__item-group">
          <div class="contacts__item"><span class="contacts__item-title">График работы:</span>
            <p class="contacts__item-content">Пн-Пт с 9:00 до 18:00 <br>Сб-Вс с 11:00 до 18:00</p>
          </div>
          <div class="contacts__item"><span class="contacts__item-title">Социальные сети:</span>
            <p class="contacts__item-content"><a class="contacts__item-link" href="vk.com">Вконтакте <br> <a class="contacts__item-link" href="t.me">Телеграм</a></a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="contacts__wrap">
        <div class="contacts__image">
          <div class="contacts__background"></div>
        </div>
      </div>
    </div>
  </div>

  @endsection