@extends('layouts.app')

@section('content')
<div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">Контакты</li>
    </ul>
    <div class="col-lg-4">
      <h1 class="h1">Проекты</h1>
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
    <div class="col-lg-4 mt-4">
      <div class="project_divider"></div>
    </div>
    <div class="col-lg-4 mt-4"><a class="project" href="" style="background: url('/img/proj_1.svg');">
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
        </div></a></div>
    <div class="col-lg-4 mt-4"><a class="project" href="" style="background: url('/img/proj_2.svg');">
        <div class="project__top">
          <div class="project__symbol project__symbol_blue">S</div>
          <div class="project__date">01.04.2023</div>
        </div>
        <div class="project__main">
          <div class="project__tag">Программирование</div>
          <div class="project__hr project__hr_blue"></div>
          <div class="project__name">Креативное агентство Accent</div>
        </div>
        <div class="project__bottom">
          <div class="project__info">accent.moscow</div>
        </div></a></div>
    <div class="col-lg-4 mt-4"><a class="project" href="" style="background: url('/img/proj_4.svg');">
        <div class="project__top">
          <div class="project__symbol project__symbol_yellow">Z</div>
          <div class="project__date">01.04.2023</div>
        </div>
        <div class="project__main">
          <div class="project__tag">Программирование</div>
          <div class="project__hr project__hr_yellow"></div>
          <div class="project__name">Креативное агентство Accent</div>
        </div>
        <div class="project__bottom">
          <div class="project__info">accent.moscow</div>
        </div></a></div>
    <div class="col-lg-4 mt-4"><a class="project" href="" style="background: url('/img/proj_5.svg');">
        <div class="project__top">
          <div class="project__symbol project__symbol_green">S</div>
          <div class="project__date">01.04.2023</div>
        </div>
        <div class="project__main">
          <div class="project__tag">Программирование</div>
          <div class="project__hr project__hr_green"></div>
          <div class="project__name">Креативное агентство Accent</div>
        </div>
        <div class="project__bottom">
          <div class="project__info">accent.moscow</div>
        </div></a></div>
    <div class="col-lg-4 mt-4">
      <div class="project_divider"></div>
    </div>
    <div class="col-lg-4 mt-4">
      <div class="project_divider"></div>
    </div>
    <div class="col-lg-4 mt-4"><a class="project" href="" style="background: url('/img/proj_6.svg');">
        <div class="project__top">
          <div class="project__symbol project__symbol_aqua">А</div>
          <div class="project__date">12.12.2012</div>
        </div>
        <div class="project__main">
          <div class="project__tag">Дизайн</div>
          <div class="project__hr project__hr_aqua"></div>
          <div class="project__name">Креативное агентство Accent</div>
        </div>
        <div class="project__bottom">
          <div class="project__info">accent.moscow</div>
        </div></a></div>
    <div class="col-lg-4 mt-4"><a class="project" href="" style="background: url('/img/proj_7.svg');">
        <div class="project__top">
          <div class="project__symbol project__symbol_gray">K</div>
          <div class="project__date">01.04.2023</div>
        </div>
        <div class="project__main">
          <div class="project__tag">Программирование</div>
          <div class="project__hr project__hr_gray"></div>
          <div class="project__name">Креативное агентство Accent</div>
        </div>
        <div class="project__bottom">
          <div class="project__info">accent.moscow</div>
        </div></a></div>
    <div class="col-lg-4 mt-4"><a class="project" href="" style="background: url('/img/proj_8.svg');">
        <div class="project__top">
          <div class="project__symbol project__symbol_dark_green">S</div>
          <div class="project__date">01.04.2023</div>
        </div>
        <div class="project__main">
          <div class="project__tag">Программирование</div>
          <div class="project__hr project__hr_dark_green"></div>
          <div class="project__name">Креативное агентство Accent</div>
        </div>
        <div class="project__bottom">
          <div class="project__info">accent.moscow</div>
        </div></a></div>
    <div class="col-lg-4 mt-4"><a class="project" href="" style="background: url('/img/proj_9.svg');">
        <div class="project__top">
          <div class="project__symbol project__symbol_purple">S</div>
          <div class="project__date">01.04.2023</div>
        </div>
        <div class="project__main">
          <div class="project__tag">Программирование</div>
          <div class="project__hr project__hr_purple"></div>
          <div class="project__name">Креативное агентство Accent</div>
        </div>
        <div class="project__bottom">
          <div class="project__info">accent.moscow</div>
        </div></a></div>
    <div class="col-lg-4 mt-4">
      <div class="project_divider"></div>
    </div>
  </div>
@endsection