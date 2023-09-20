@extends('layouts.app');
@section('title', $pageTitle . ' | ' . config('app.name'))
@section('content')
<div class="row">
    <div class="col-lg-6">
      <div class="header__banner">
        <div class="header__pretext">#design&nbsp;#code </div>
        <h1 class="h1">{{ $pageTitle }}</h1>
        <div class="header__features"> 
          <ul class="header__features-list">
            <li class="header__features-list__item">Дизайн</li>
            <li class="header__features-list__item">Интеграции</li>
            <li class="header__features-list__item">Разработка</li>
          </ul>
        </div><a class="button" href="#">Выбрать нас</a>
        <div class="header__info"><a class="header__link" target="_blank" href="{{ route('project.list')}}">Смотреть портфолио<svg width="12" class="header__link header__link-img" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"><path d="M1.35355 0.646447C1.15829 0.451184 0.841709 0.451184 0.646447 0.646447C0.451184 0.841709 0.451184 1.15829 0.646447 1.35355L1.35355 0.646447ZM11 11.5C11.2761 11.5 11.5 11.2761 11.5 11V6.5C11.5 6.22386 11.2761 6 11 6C10.7239 6 10.5 6.22386 10.5 6.5V10.5H6.5C6.22386 10.5 6 10.7239 6 11C6 11.2761 6.22386 11.5 6.5 11.5H11ZM0.646447 1.35355L10.6464 11.3536L11.3536 10.6464L1.35355 0.646447L0.646447 1.35355Z"/></svg></a></div>
        
      </div>
    </div>
    <div class="col-lg-6">
      <div class="circle__wrap hide">
        <div class="circle">
          <div class="circle__inner"></div>
        </div>
      </div><img class="background__image" src="{{ asset('site/img/back.svg') }}"/>
    </div>
  </div>
  <div class="row section">
    <div class="col-lg-12">
      <div class="section__title">
        <div class="header__pretext header__pretext-small">#fresh&nbsp;solutions</div>
        <h2 class="h2 h2__small">Попробуйте&nbsp; <span class="colored">свежие&nbsp;решения </span> для&nbsp;своего&nbsp;бизнеса</h2>
      </div>
    </div>
  </div>
  <div class="row">
    @foreach ($solutions as $k => $solution)
    <div class="col-lg-3 mb-4"><a class="solutions__card h-100" href="#">
        <div class="solutions__number">0{{$k + 1}}</div>
        <div class="solutions__name">{{ $solution->title }}</div>
        @if ($solution->services)
        <ul class="solutions__list">
          @foreach ($solution->services as $service)
          <li class="solutions__list-item"> <span class="solutions__list-text">{{ $service->title }}</span></li>
          @endforeach
        </ul>
        @endif
        <hr class="hr"/>
        <div class="solutions__info">
          <div class="solutions__price">от&nbsp; {{ $solution->price }}&nbsp; ₽</div>
        </div></a>
      </div>
  @endforeach
  </div>
  <div class="row section">
    <div class="col-lg-12">
      <div class="section__title">
        <div class="header__pretext header__pretext-small">#using&nbsp;technologies</div>
        <h2 class="h2 h2__small"><span class="colored">Технологии</span> разработки</h2>
      </div>
    </div>
  </div>
  <div class="row">
    @foreach ($groups as $group)
        @if ($group->technologies)
        <div class="col-lg-3 col-sm-6">
            <div class="technology__item card h-100">
              <div class="technology__item-wrap">
                <h4 class="technology__name">{{$group->title}}</h4>
                <div class="technology__list-items">
                  <ul class="technology__list">
                    @foreach ($group->technologies as $technology)
                    <li class="technology__list-item">{{ $technology->title }}</li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="technology__divider"></div>
            </div>
          </div>
        @endif
    @endforeach
  </div>
  <div class="row section">
    <div class="col-lg-12">
      <div class="section__title">
        <div class="header__pretext header__pretext-small">#few&nbsp;projects&nbsp;we proud of</div>
        <h2 class="h2 h2__big">Немного <span class="colored">проектов</span>, которыми гордимся</h2>
      </div>
    </div>
    @foreach ($projects as $project)
    
    <div @class([
      'mb-4',
      'col-lg-8' => $project->property_column_size_8,
      'col-lg-4' => $project->property_column_size_4
    ])>
        <a class="sling h-100" style="background: url({{ asset('storage/' . $project->img)}})" href="">
          <div class="sling__top">
            <div class="sling__date">{{ $project->year }}</div>
            <div class="sling__title">{{ $project->title }}</div>
          </div>
        </a>
    </div>
    @endforeach
  </div>
  <div class="row section">
    <div class="col-lg-12">
      <div class="section__title">
        <div class="header__pretext header__pretext-small">#latest&nbsp;posts</div>
        <h2 class="h2 h2__big">Последние <span class="colored">посты</span></h2>
      </div>
    </div>
  </div>
  <div class="row"> 
    <div class="post__slider">
    @foreach ($articles as $article)
    <div class="col-lg-3">
          <div class="post__card card">
              <a class="post__card-link" href="{{ route('article.view', ['slug' => $article->slug ])}}"> 
                  @if ($article->img)
                  <img class="img-fluid post__image" src="{{ asset('storage/' . $article->img) }}"/>
                  @else
                  <img class="img-fluid post__image" src="{{ asset('site/img/post1.png') }}"/>
                  @endif
                  <span class="post__card-date">{{ $article->formattedDateCreated}}</span>
                  <div class="post__card-title">{{ Illuminate\Support\Str::limit(strip_tags($article->title),45 ) }}</div>
              </a>
        </div>
    </div>
    @endforeach
    </div>
  </div>
  <div class="row section">
    <div class="col-lg-12">
      <div class="section__title">
        <div class="header__pretext header__pretext-small">#contact&nbsp;us</div>
        <h2 class="h2 h2__big">Придумали проект? <br><span class="colored">Оставьте заявку</span></h2>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-5 col-sm-12">
      <div class="contact__text">Для расчета стоимости и получения подробной консультации, заполните email, телефон и прикрепите файл с ТЗ, если имеется.</div>
      <form action="{{ route('feedback.submit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" data-required="true" data-type="border" name="feedback_name" placeholder="Ваше имя"/>
        <input type="text" data-required="true" data-type="border" name="feedback_phone" placeholder="Номер телефона"/>
        <div class="form__field-group">
          <label>Вид работ
            <select name="feedback_type"> 
              @foreach ($serviceTypes as $serviceType)
              <option value="{{$serviceType->id}}">{{ $serviceType->title }}</option>
              @endforeach
            </select>
          </label>
        </div>
        <input type="file" name="feedback_file">
        <div class="form__field-policy">
          <label class="checkbox-button">
            <input class="checkbox-button__input" data-required="true" name="feedback_privacy" type="checkbox"/> <span class="checkbox-button__control"></span><span class="checkbox-button__label">Я соглашаюсь на обработку персональных данных в соответствие с политикой конфиденциальности</span>
          
          </label>
          
        </div>
        <button class="button js-form-send">Отправить</button>
      </form>
    </div>
    <div class="col-lg-7">
      <div id="contact-img"></div>
    </div>
  </div>
@endsection