@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить проект</h1>
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
              <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="text-secondary"> Наименование </label>
                  <input type="text" name="title" placeholder="Наименование" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-secondary">Активность </label>
                    <input type="checkbox" name="active">
                  </div>
                  <div class="form-group">
                    <label class="text-secondary">Сортировка </label>
                    <input type="text" value="500" placeholder="Сортировка" class="form-control" name="sort">
                  </div>
                  <div class="form-group">
                    <input type="radio" class="props" id="property_column_size_4"  name="property_column_size_4">
                    <label class="text-secondary">4 колонки </label>
                    <input type="radio" class="props" id="property_column_size_8" name="property_column_size_8"> 
                    <label class="text-secondary">8 колонок </label>
                  </div>
                <div class="form-group">
                  <label class="text-secondary"> Ссылка </label>
                    <input type="text" name="url" placeholder="Ссылка" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-secondary"> Год </label>
                    <input type="text" name="year" placeholder="Год проекта" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-secondary"> Дата </label>
                    <input type="date" name="p_date" placeholder="Ссылка" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-secondary"> Решение </label>
                    <select name="solution_id" class="form-control">
                    @foreach ($solutions as $solution) 
                    <option value="{{ $solution->id}} ">{{$solution->title}}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-secondary">Цвет</label>
  
                    <div class="input-group my-colorpicker2">
                      <input type="text" name="color" class="form-control">
  
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-square"></i></span>
                      </div>
                    </div>
                    <!-- /.input group -->
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
      <script>

        columns1 = document.getElementById('property_column_size_4');
        columns2 = document.getElementById('property_column_size_8');

        columns1.addEventListener('click', change);
        columns2.addEventListener('click', change);

        function change(e) {
          if (e.target.id === 'property_column_size_4') {
            columns2.checked = false;
          }else{
            columns1.checked = false;
          }
        }
        // document.querySelectorAll('.props').forEach(function(currentValue, currentIndex, listObj) {
        //     console.log(listObj);
        //     if (currentValue.checked) {
              
        //     }
        // });
      </script>
      <!-- /.content -->
@endsection