@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить решение</h1>
            </div><!-- /.col -->
          <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
          <!-- Small boxes (Stat box) -->
          <div class="row">
             <div class="col-md-6">
              <form action="{{ route('solution.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="text-secondary">Название</label>
                  <input type="text" name="title" placeholder="Наименование" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-secondary">Активность </label>
                    <input type="checkbox" name="active">
                    
                  </div>
                <div class="form-group">
                    <label class="text-secondary">Цена</label>
                    <input type="number" name="price" placeholder="Цена" class="form-control">
                  </div>
                  <div class="form-group">
                    <textarea rows="15" col="10" name="description" placeholder="Описание" class="form-control">
                    </textarea>
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