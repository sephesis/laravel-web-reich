@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактировать решение {{$solution->title}}</h1>
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
        @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
          <h4><i class="icon fa fa-check"></i>{{ \Session::get('success') }}</h4>
        </div>
        @endif
          <!-- Small boxes (Stat box) -->
          <div class="row">
             <div class="col-md-6">
              <form action="{{ route('solution.update', $solution->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="text-secondary">Название</label>
                  <input type="text" name="title" placeholder="Наименование" value="{{ $solution->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-secondary">Активность </label>
                    <input type="checkbox" {{ $solution->active ? 'checked' : '' }}name="active">
                    
                  </div>
                <div class="form-group">
                    <label class="text-secondary">Цена</label>
                    <input type="number" name="price" placeholder="Цена"  value="{{ $solution->price}}" class="form-control">
                  </div>
                  <div class="form-group">
                    <textarea rows="15" col="10" name="description" placeholder="Описание" class="form-control">{{$solution->description}}</textarea>
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