  
  @extends('layouts.admin')

  @section('content')
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12">
                <h1 class="m-0">Редактирование статьи «{{ $article->title }}»</h1>
              </div><!-- /.col -->
            <!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
          <div class="container-fluid">
            @if (\Session::has('success'))
            <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
              <h4><i class="icon fa fa-check"></i>{{ \Session::get('success') }}</h4>
            </div>
            @endif
            <div class="row">
               <div class="col-md-6">
                <form action="{{ route('article.update', $article->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('patch')
                  <div class="form-group">
                    <label class="text-secondary">Наименование </label>
                    <input type="text" name="title" placeholder="Наименование" value="{{ $article->title }}" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-secondary">Активность </label>
                    <input type="checkbox" name="active" {{ $article->active == 1 ? 'checked' : ''}} >
                  
                    
                  </div>
                  <div class="form-group">
                    <label class="text-secondary">Slug </label>
                      <input type="text" name="slug" placeholder="Символьный код" value="{{ $article->slug }}" class="form-control">
                    </div>
                    <label class="text-secondary">Описание </label>
                  <div class="form-group">
                      <textarea rows="15" col="10" name="description" placeholder="Текст" class="form-control">{{ $article->description }}</textarea>
                    </div>
        
                     <div class="form-group">
                      <label>Теги</label>
                       <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Выберите тег" style="width: 100%;">
                        @foreach ($tags as $tag)
                          <option value="{{ $tag->id }}" {{ in_array($tag->id, $articleTags) ? 'selected' : ''}} >{{ $tag->title }}</option>
                        @endforeach
                      </select> 
                    </div> 
        
                    <div class="form-group">
                      <div class="input-group-append mb-3">
                        <div class="input-group-text"> <a href="{{ asset('storage/' . $article->img) }}">Загруженный файл</a></div>
                      </div>
                      <label for="exampleInputFile">Загрузка файла</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Загрузка</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
               </div>
            </div>
            <!-- /.row -->
         
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
  @endsection