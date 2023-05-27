@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить технологию</h1>
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
              <form action="{{ route('technology.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" name="title" placeholder="Наименование" class="form-control">
                </div>

                <div class="form-group">
                    <textarea name="description" rows="15" placeholder="Описание" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label>Входит в группу технологий</label>
                  <select class="form-control select2" name="technology_group_id" style="width: 100%;">
                    @foreach ($technologyGroups as $group)
                     <option value="{{ $group->id }}">{{ $group->title }}</option>
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