@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить статью</h1>
            </div><!-- /.col -->
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
             <div class="col-md-6">
              <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <input type="text" name="title" placeholder="Наименование" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="slug" placeholder="Символьный код" class="form-control">
                  </div>
                <div class="form-group">
                    <textarea rows="15" col="10" name="description" placeholder="Текст" class="form-control">
                    </textarea>
                  </div>

                  <div class="form-group">
                    <label>Теги</label>
                    <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Выберите тег" style="width: 100%;">
                      @foreach ($tags as $tag)
                      <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
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
                  <input type="submit" value="Сохранить" class="btn btn-primary">
                </div>
              </form>
             </div>
          </div>
          <!-- /.row -->
       
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection