<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Web-Reich</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet" type="text/css"/>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('site/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('site/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('site/favicon-16x16.png') }} ">
  <link rel="icon" type="image/png" href="{{ asset('site/favicon.ico') }} ">
    {{-- <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script> --}}
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  </head>
  <body>
    <div class="container container-relative">
      <div class="row">
        <div class="col-3"><a class="logo" href="/"><img src="{{ asset('site/img/logo.svg')}}"/></a></div>
        <div class="col-9">
          <ul class="menu">
            <li class="menu__item"> <a class="menu__item-link" href="{{ route('solution.list')}}">Услуги</a></li>
            <li class="menu__item"> <a class="menu__item-link" target="_blank" href="{{ route('project.list')}}">Проекты</a></li>
            <li class="menu__item"> <a class="menu__item-link" target="_blank" href="#">Прайс</a></li>
            <li class="menu__item"> <a class="menu__item-link" target="_blank" href="{{ route('article.list')}}">Статьи</a></li>
            <li class="menu__item"> <a class="menu__item-link" target="_blank" href="{{ route('contact.view')}}">Контакты</a></li>
          </ul>
        </div>
      </div>
      @yield('content')
      <div class="row footer">
        <div class="footer__divider"></div><a class="footer__logo" href="/"><img src="{{asset('site/img/logo.svg')}}"/></a>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer__title">Услуги </div><a class="footer__link">Веб-дизайн</a><a class="footer__link">Программирование</a><a class="footer__link">Фирменный стиль</a>
        </div>
        <div class="col-lg-3">
          <div class="footer__title">Клиентам </div><a class="footer__link">Технологии</a><a class="footer__link">Проекты</a><a class="footer__link">Частые вопросы</a>
        </div>
        <div class="col-lg-3">
          <div class="footer__title">Разделы </div><a class="footer__link">Услуги</a><a class="footer__link">Посты</a><a class="footer__link">Проекты</a>
        </div>
        <div class="col-lg-3"><a class="footer__link footer__mail">info@webreych.com</a></div>
      </div>
      <div class="d-flex justify-content-between"><a class="footer__credits footer__credits-link">Карта сайта</a><span class="footer__credits">2022</span><span class="footer__credits">Разработка сайта <span class="colored"> WebReich</span> </span></div>
    </div>

    <script src="{{ asset('site/js/scripts.js') }} "></script>
    <script src="{{ asset('site/js/custom/main.js') }} "></script>
  </body>
</html>