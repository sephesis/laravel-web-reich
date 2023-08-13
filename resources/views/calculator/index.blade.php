@extends('layouts.app')

@section('title', $pageTitle . ' | ' . config('app.name'))

@section('content')
<div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">Калькулятор</li>
    </ul>
    <div class="col-lg-8"> 
      <h1 class="h1">{{ $pageTitle }}</h1>
      <form class="calculator" action="#">
        <div class="calculator__label">Вид работ:
          <select>
            <option>Программирование сайта</option>
            <option>Веб-дизайн</option>
          </select>
        </div>
        <div class="calculator__inner calculator__inner_flex">
          <div class="calculator__left">
            <div class="calculator__label">Техническое задание разрабатывает:</div>
            <div class="calculator__items">
              <div class="calculator__item"><input type="radio" name="rb" id="rb2"> <label for="rb2">Заказчик</label></div>
              <div class="calculator__item"><input type="radio" name="rb" id="rb3"> <label for="rb3">Исполнитель </label></div>
            </div>
          </div>
          <div class="calculator__right">
            <div class="calculator__label">Разработка через:</div>
            <div class="d-flex">
              <div class="calculator__item">
                <label class="checkbox-button">
                  <input class="checkbox-button__input" type="checkbox"/><span class="checkbox-button__control"></span><span class="checkbox-button__label">Гит</span>
                </label>
              </div>
              <div class="calculator__item">
                <label class="checkbox-button">
                  <input class="checkbox-button__input" type="checkbox"/><span class="checkbox-button__control"></span><span class="checkbox-button__label">FTP</span>
                </label>
              </div>
              <div class="calculator__item">
                <label class="checkbox-button">
                  <input class="checkbox-button__input" type="checkbox"/><span class="checkbox-button__control"></span><span class="checkbox-button__label">CMS</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="calculator__inner">
          <div class="calculator__tab">Модули</div>
          <div class="calculator__item calculator__item_margin">
            <label class="checkbox-button">
              <input class="checkbox-button__input" type="checkbox"/><span class="checkbox-button__control"></span><span class="checkbox-button__label">Наполнение интернет-магазина товарами (Импорт товаров в файле формата XLS, XLSX, CSV)</span>
            </label>
          </div>
          <div class="calculator__item calculator__item_margin">
            <label class="checkbox-button">
              <input class="checkbox-button__input" type="checkbox"/><span class="checkbox-button__control"></span><span class="checkbox-button__label">Калькулятор</span>
            </label>
          </div>
          <div class="calculator__item calculator__item_margin">
            <label class="checkbox-button">
              <input class="checkbox-button__input" type="checkbox"/><span class="checkbox-button__control"></span><span class="checkbox-button__label">«Избранное»</span>
            </label>
          </div>
          <div class="calculator__item calculator__item_margin">
            <label class="checkbox-button">
              <input class="checkbox-button__input" type="checkbox"/><span class="checkbox-button__control"></span><span class="checkbox-button__label">«Сравнение товаров»</span>
            </label>
          </div>
          <div class="calculator__item calculator__item_margin">
            <label class="checkbox-button">
              <input class="checkbox-button__input" type="checkbox"/><span class="checkbox-button__control"></span><span class="checkbox-button__label">«Форма для сбора заявок»</span>
            </label>
          </div>
          <div class="calculator__item calculator__item_margin">
            <label class="checkbox-button">
              <input class="checkbox-button__input" type="checkbox"/><span class="checkbox-button__control"></span><span class="checkbox-button__label">Другое</span>
            </label>
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-4">
      <div class="pan">
        <div class="pan__top">
          <div class="pan__name pan__name_gray">Смета проекта</div>
          <div class="pan__icon pan__icon_gray">Очистить</div>
        </div>
        <div class="pan__middle">
          <div class="pan__list">
            <div class="pan__name pan__name_gray">Услуги</div>
            <div class="pan__item">
              <div class="pan__title">Разработка через CMS</div>
              <div class="pan__icon pan__icon_red">✕</div>
            </div>
            <div class="pan__item">
              <div class="pan__title">Техническое задание от заказчика</div>
              <div class="pan__icon pan__icon_red">✕</div>
            </div>
            <div class="pan__name pan__name_gray">Модули</div>
            <div class="pan__item">
              <div class="pan__title">Избранное</div>
              <div class="pan__icon pan__icon_red">✕</div>
            </div>
            <div class="pan__item">
              <div class="pan__title">Наполнение интернет-магазина товарами</div>
              <div class="pan__icon pan__icon_red">✕</div>
            </div>
          </div>
        </div>
        <div class="pan__bottom"></div>
      </div>
    </div>
  </div>
  @endsection