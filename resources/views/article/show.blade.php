@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Просмотр статьи «{{ $article->title }}»</h1>
            </div><!-- /.col -->

            <div class="col-sm-6 text-right">
              <a class="btn btn-primary"  href="{{ route('article.edit', $article->id ) }}">Редактировать</a>
            </div>
          <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{ $article->title }}</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                      <div class="row">
                        <div class="col-12">
                           @if ($article->img)
                            <img class="img-fluid" src="{{ asset('storage/' . $article->img) }}">
                            @endif
                            <div class="text-secondary mt-3">
                                {{ strip_tags($article->description)}}
                            </div>
                         
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                      <h3 class="text-primary"><i class="fa fa-pencil-square-o"></i> Информация о статье</h3>
                      {{-- <p class="text-muted" style="">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p> --}}
                      <br>
                      <div class="text-muted">
                        <p class="text-sm">Дата создания:
                          <b class="d-block"> {{ $article->created_at }}</b>
                        </p>
                        <p class="text-sm">Дата последнего обновления:
                          <b class="d-block">{{ $article->updated_at }}</b>
                        </p>

                        <p class="text-sm">Статус
                            <b class="d-block">{{ $article->statusTitle }}</b>
                          </p>
                          <p class="text-sm">Автор
                            {{-- <b class="d-block">{{ Auth::user()->name }}</b> --}}
                          </p>
                      </div>
                      @if (count($tags) > 0)
                      <h5 class="mt-5 text-muted">Теги</h5>
                      <ul class="list-unstyled">
                        @foreach ($tags as $tag)
                        <li>
                          <a href="{{ route('tag.index') }}" class="btn-link text-secondary"><i class="fa fa-tags"></i> {{ $tag->title }}</a>
                        </li>
                        @endforeach
                      </ul>
                      @endif
                      <div class="mt-5">
                        <a href="#" class="btn btn-primary">Посмотреть на сайте</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
          <!-- /.row -->
       
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection