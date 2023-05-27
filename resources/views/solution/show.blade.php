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
        
                  {{-- <div class="card-tools"> --}}
                    {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                      <i class="fas fa-times"></i>
                    </button> --}}
                  {{-- </div> --}}
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                      {{-- <div class="row">
                        <div class="col-12 col-sm-4">
                          <div class="info-box bg-light">
                            <div class="info-box-content">
                              <span class="info-box-text text-center text-muted">Estimated budget</span>
                              <span class="info-box-number text-center text-muted mb-0">2300</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-4">
                          <div class="info-box bg-light">
                            <div class="info-box-content">
                              <span class="info-box-text text-center text-muted">Total amount spent</span>
                              <span class="info-box-number text-center text-muted mb-0">2000</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-4">
                          <div class="info-box bg-light">
                            <div class="info-box-content">
                              <span class="info-box-text text-center text-muted">Estimated project duration</span>
                              <span class="info-box-number text-center text-muted mb-0">20</span>
                            </div>
                          </div>
                        </div>
                      </div> --}}
                      <div class="row">
                        <div class="col-12">
                           @if ($article->img)
                            <img class="img-fluid" src="{{ asset('storage/' . $article->img) }}">
                            @endif
                            <div class="text-secondary mt-3">
                                {{ strip_tags($article->description)}}
                            </div>
                          {{-- <h4>Recent Activity</h4> --}}
                            {{-- <div class="post">
                              <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                <span class="username">
                                  <a href="#">Jonathan Burke Jr.</a>
                                </span>
                                <span class="description">Shared publicly - 7:45 PM today</span>
                              </div>
                              <!-- /.user-block -->
                              <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore.
                              </p>
        
                              <p>
                                <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                              </p>
                            </div> --}}
        
                            {{-- <div class="post clearfix">
                              <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                <span class="username">
                                  <a href="#">Sarah Ross</a>
                                </span>
                                <span class="description">Sent you a message - 3 days ago</span>
                              </div>
                              <!-- /.user-block -->
                              <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore.
                              </p>
                              <p>
                                <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                              </p>
                            </div> --}}
        
                            {{-- <div class="post">
                              <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                <span class="username">
                                  <a href="#">Jonathan Burke Jr.</a>
                                </span>
                                <span class="description">Shared publicly - 5 days ago</span>
                              </div>
                              <!-- /.user-block -->
                              <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore.
                              </p>
        
                              <p>
                                <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
                              </p>
                            </div> --}}
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
            
            {{-- <div class="col-8">
                <a href="{{ route('article.index') }}">Назад к списку статей</a>
                <h2>{{$article->title}}</h2>
                <p>{{ $article->slug }}</p>
                <p>{{ $article->description }}</p>
                @if (count($tags) > 0)
                <p>Теги</p>
                <ul>
                    @foreach ($tags as $tag)
                    <li>{{ $tag->title }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="col-4">
                <p class="text-secondary">Дата создания: {{ $article->created_at }}</p>
                <p class="text-secondary">Дата последнего обновления: {{ $article->updated_at }}</p>
                <p>{{ $article->statusTitle }}</p>
            </div> --}}
            </div>
          </div>
          <!-- /.row -->
       
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection