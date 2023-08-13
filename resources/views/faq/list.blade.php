@extends('layouts.app')

@section('content')
<div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">ЧАВО</li>
    </ul>
    <div class="col-lg-12">
      <h1 class="h1">{{ $pageTitle }}</h1>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        @foreach ($faqs as $faq)
        <div class="accordion-item">
            <h2 class="accordition-header" id="flush-headingOne-{{$faq->id}}">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-{{$faq->id}}" aria-expanded="false" aria-controls="flush-collapseOne-{{$faq->id}}">{{ $faq->title }}</button>
            </h2>
            <div class="accordion-collapse collapse" id="flush-collapseOne-{{$faq->id}}" aria-labelledby="flush-headingOne-{{$faq->id}}" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"> @php echo $faq->description @endphp </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  @endsection