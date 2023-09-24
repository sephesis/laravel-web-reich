@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Создать модуль</h1>
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
              <form action="{{ route('module.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="title" placeholder="Наименование" class="form-control">
                  </div>

                  <div class="form-group">
                    <input type="number" name="price" value="5000" placeholder="Цена" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="checkbox" name="show_in_calculator">
                    <label class="text-secondary">Показывать в калькуляторе </label>
                  </div>
                  <div class="form-group">
                  <select class="form-control" name="service_id">
                    @foreach ($services as $service)
                    <option value="{{ $service->id }}">{{ $service->title }}</option>
                    @endforeach
                  </select>
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